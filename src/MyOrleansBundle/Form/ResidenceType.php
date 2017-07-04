<?php

namespace MyOrleansBundle\Form;

use MyOrleansBundle\Entity\Media;
use MyOrleansBundle\Entity\TypeMedia;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResidenceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('adresse', TextType::class)
            ->add('codePostal', NumberType::class)
            ->add('ville', TextType::class)
            ->add('latitude', NumberType::class)
            ->add('longitude', NumberType::class)
            ->add('dateLivraison', TextType::class)
            ->add('description', TextareaType::class)
            ->add('nbTotalLogements', NumberType::class)
            ->add('noteTransports', NumberType::class)
            ->add('noteCommerces', NumberType::class)
            ->add('noteServices', NumberType::class)
            ->add('noteEsthetisme', NumberType::class)
            ->add('favoris', ChoiceType::class, [
                'choices' => [
                    'Oui' => '1',
                    'Non' => '0'
                ]
            ])
            ->add('accroche', TextareaType::class)
            ->add('medias', CollectionType::class,
                array(
                    'entry_type' => MediaType::class,
                    'allow_add' => true,
                    'prototype' => true,
                ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyOrleansBundle\Entity\Residence',

        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'myorleansbundle_residence';
    }


}
