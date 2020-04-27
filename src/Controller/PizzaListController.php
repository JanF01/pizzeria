<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\DddMenuPizza;
use Symfony\Component\HttpFoundation\Response;
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
        $direction=0;
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
 

        $pizzas = $repo->findBySearch($search,$sort,$direction);

            if(!$direction){
        $direction=1;
            }
            else{
                $direction=0;
            }
        

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
}
