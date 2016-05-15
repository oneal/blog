<?php

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                "required" => "Required",
                "label" => "Nombre",
                "attr" => array(
                    "class" => "form-control",
                    "placeholder" => "Nombre"
                )
            ))
            ->add('last_name', TextType::class, array(
                "label" => "Apellidos",
                "attr" => array(
                    "class" => "form-control",
                    "placeholder" => "Apellidos"
                )
            ))
            ->add('email', TextType::class, array(
                "required" => "Required",
                "label" => "Correo Eléctronico",
                "attr" => array(
                    "class" => "form-control",
                    "placeholder" => "Correo Eléctronico"
                )
            ))
            ->add('comments', TextareaType::class, array(
                "required" => "Required",
                "label" => "Mensaje",
                "attr" => array(
                    "class" => "form-control",
                    "placeholder" => "Mensaje"
                )
            ))
            ->add('enviar', SubmitType::class, array(
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
            'data_class' => 'AppBundle\Entity\Form\Contact'
        ));
    }
}
