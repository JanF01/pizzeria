<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Form\PizzaFormType;
use App\Entity\DddMenuPizza;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PizzaListController extends AbstractController
{

      /**
     * @Route("/", name="pizza_show")
     */
    public function show()
    {
        $repo = $this->getDoctrine()->getRepository(DddMenuPizza::class);

        $pizzas = $repo->findAll();
        $direction = 0;
        $szukaj = 'empty';


        return $this->render("pizza_list/index.html.twig",[
            'pizzas' => $pizzas,
            'direction' => $direction,
            'search' => $szukaj,
            'deleted' => false
        ]);
    }
    
    /**
     * @Route("/szukaj/{search}/{sort}/{direction}", name="pizza_search")
     */

    public function search(string $search, string $sort, int $direction){
        $repo = $this->getDoctrine()->getRepository(DddMenuPizza::class);

        $pizzas = array();
        $szukaj=$search;
 

        //Stworzona dodatkowa metoda w DddMenuPizzaRepository z wymaganym Sortowaniem i wyszukiwaniem SQL za pomocą QueryBuilder
        $pizzas = $repo->findBySearch($search,$sort,$direction);

        (!$direction)?$direction=1:$direction=0;

        
        return $this->render("pizza_list/index.html.twig",[
            'pizzas' => $pizzas,
            'direction' => $direction,
            'search' => $szukaj,
            'deleted' => false
        ]);

    }

      /**
     * @Route("/delete/{id}/", name="pizza_delete")
     */

     public function delete(int $id){
        $repo = $this->getDoctrine()->getRepository(DddMenuPizza::class);

        $pizza = $repo->findOneBy(['id'=>$id],['id'=>'ASC']);

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->remove($pizza);
        $entityManager->flush($pizza);
        
        $this->addFlash('notice',"Pizza została usunięta z bazy");

        return $this->redirectToRoute('pizza_show');
     }

      /**
     * @Route("/modify/{id}/", name="pizza_modify")
     * 
     * 
     * @param Request $request
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function modify(int $id, Request $request){
        $repo = $this->getDoctrine()->getRepository(DddMenuPizza::class);

        $pizza = $repo->findOneBy(['id'=>$id],['id'=>'ASC']);

        
        $form = $this->createForm(PizzaFormType::class,$pizza);
        $form->handleRequest($request);
        
 
        if($form->isSubmitted() && $form->isValid()){
      
            $entityManager = $this->getDoctrine()->getManager();
 
            $entityManager->flush($pizza);
 
            $this->addFlash('success',"Gratulacje! Pizza została zmodyfikowana");
 
        }

        return $this->render('form/modify.html.twig', [
            'form' => $form->createView(),
        ]);


        $this->addFlash('notice',"Pizza została usunięta z bazy");

        return $this->redirectToRoute('pizza_show');
     }
}
