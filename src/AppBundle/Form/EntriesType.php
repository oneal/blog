<?php

namespace AppBundle\Form;

use AppBundle\Entity\Category;
use Doctrine\Common\Collections\ArrayCollection;
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
     * EntriesType constructor.
     * @param $categories
     */
    public function __construct(Array $allCategories){
        $this->categories = $allCategories;
    }


    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('content', TextType::class)
            ->add('name', TextType::class )
            ->add('fecha', 'date')
            ->add('slug', TextType::class)
            ->add('category', ChoiceType::class, Array(
                'choices' => $this->categories
            ))
            ->add('guardar', SubmitType::class)
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
