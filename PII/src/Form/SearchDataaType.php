<?php

namespace App\Form;

use App\Data\SearchDataa;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Repository\PersonnelTerrainRepository;

//use Symfony\Component\Form\Extension\Core\Type\TextType;
//use Symfony\Component\Form\AbstractType;


class SearchDataaType extends AbstractType
{

    public function configureOptions(OptionsResolver $resolver){

        $resolver->setDefaults([
            'data_class' => SearchDataa::class,
            'method'     => 'GET',
            'csrf_protection' => false,
            'user'=>null


        ]);
    }

    public function fetBlockPrefix(){

        return '';
    }



    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('q', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'nom'
                ]
            ])
            ->add('p', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'poste'
                ]
            ]);
    }
}