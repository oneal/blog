<?php

namespace AppBundle\Form;

use AppBundle\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EntriesType extends AbstractType
{
    private $categories;



    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                "required"=>"required",
                'label' => 'Título',
                "attr" =>array(
                    "class" => "form-control",
                    "placeholder" => "Título",
                ),
            ))
            ->add('content', TextareaType::class, array(
                "required"=>"required",
                'label' => 'Contenido',
                "attr" =>array(
                    "class" => "form-control",
                    "placeholder" => "Contenido",
                ),
            ))
            ->add('name', TextType::class, array(
                "required"=>"required",
                'label' => 'Autor',
                "attr" =>array(
                    "class" => "form-control",
                    "placeholder" => "Autor",
                ),
            ))
            ->add('fecha', DateType::class, array(
                "required"=>"required",
                'label' => 'Fecha publicación'
            ))
            ->add('slug', TextType::class, array(
                "required"=>"required",
                'label' => 'Nombre de la Ruta',
                "attr" =>array(
                    "class" => "form-control",
                    "placeholder" => "Nombre de la Ruta",
                ),
            ))
            ->add('category', EntityType::class, array(
                "required"=>"required",
                'label' => 'Categoría',
                'class' => 'AppBundle:Category',
                'choice_label' => function($category){
                    return $category->getName();
                },
                "attr" =>array(
                    "class" => "form-control"
                )
            ))
            ->add('save', SubmitType::class, array(
                "attr" => array(
                    "class" => "btn btn-primary"
                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Entries'
        ));
    }
}
