<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Form\PizzaFormType;
use App\Entity\DddMenuPizza;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class FormController extends AbstractController
{
    /**
     * @Route("/add", name="form")
     * 
     * 
     * @param Request $request
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
       $ifc=false;
       $pizza = new DddMenuPizza();
       
       $pizza->setGroupid(13);
       $pizza->setPublic(1);
       $pizza->setDodal("admin");
       $pizza->setFoto('');
       $pizza->setPart('');

       $form = $this->createForm(PizzaFormType::class,$pizza);
       $form->handleRequest($request);
       

       if($form->isSubmitted() && $form->isValid()){
     
           $entityManager = $this->getDoctrine()->getManager();

           $entityManager->persist($pizza);
           $entityManager->flush($pizza);

           $this->addFlash('notice',"Gratulacje! Twoja Pizza została dodana");

        $ifc=true;
       }
       

        return $this->render('form/index.html.twig', [
            'form' => $form->createView(),
            'ifc' => $ifc
        ]);
    }
}
