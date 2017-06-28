<?php
/**
 * Created by PhpStorm.
 * User: jean-baptiste
 * Date: 19/06/17
 * Time: 17:47
 */

namespace MyOrleansBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class FormulaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('post')
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', TextType::class)
            ->add('telephone', TextType::class)
            ->add('codePostal', TextType::class)
            ->add('ville', TextType::class)
            ->add('adresse', TextType::class)
            ->add('message', TextareaType::class)
            ->add('newsletter', ChoiceType::class, array(
                'choices' => array('oui' => true, 'non' => false),
                'expanded' => true,
                'multiple' => false
            ))

            ->add('envoyer', SubmitType::class, [
                'attr'=> ['class' => 'waves-effect waves-light btn-large light-green']
            ])
            ->getForm();

    }
}
