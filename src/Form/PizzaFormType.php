<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class PizzaFormType extends AbstractType{

   /**
    * {@inheritdoc}
    */
    public function buildForm(FormBuilderInterface $builder, array $options ){

       $builder
       ->add(
           'name',
           TextType::class,
           [
               'constraints' => [new NotBlank()],
               'attr' => ['class' => 'form-control']
           ]
       )
       ->add(
        'sprice',
        NumberType::class,
        [
            'constraints' => [new NotBlank()],
            'attr' => ['class' => 'form-control']
        ]
      )
      ->add(
        'mprice',
        NumberType::class,
        [
            'constraints' => [new NotBlank()],
            'attr' => ['class' => 'form-control']
        ]
      )
      ->add(
        'lprice',
        NumberType::class,
        [
            'constraints' => [new NotBlank()],
            'attr' => ['class' => 'form-control']
        ]
      )
      ->add(
        'papryczki',
        NumberType::class,
        [
            'constraints' => [new NotBlank()],
            'attr' => ['class' => 'form-control']
        ]
      )
      ->add(
        'description',
        TextareaType::class,
        [
            'constraints' => [new NotBlank()],
            'attr' => ['class' => 'form-control']
        ]
      )
      ->add(
        'create',
        SubmitType::class,
        [
            'attr' => ['class' => 'form-control btn-primary'],
            'label' => 'Zapisz!'
        ]
        );



    }

      /**
    * {@inheritdoc}
    */

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
          'data_class' => 'App\Entity\DddMenuPizza'
        ]);
    }




}


?>