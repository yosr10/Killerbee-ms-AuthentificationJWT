<?php

namespace App\Form;
use App\Entity\User; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('email', TextType::class)
        ->add('password', TextType::class)
        ->add('save',SubmitType::class,array('label'=>'Save','attr'=>array('class'=>'btn btn-primary m-3')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\User',
            'translation_domain'=>'forms'
        ));
    }
}