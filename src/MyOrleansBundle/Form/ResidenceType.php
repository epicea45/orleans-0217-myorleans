<?php

namespace MyOrleansBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResidenceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('adresse')->add('codePostal')->add('ville')
            ->add('latitude')->add('longitude')->add('dateLivraison')->add('description')
            ->add('nbTotalLogements')->add('noteTransports')->add('noteCommerces')
            ->add('noteServices')->add('noteEsthetisme')->add('favoris')->add('accroche')
         /*  ->add('medias', CollectionType::class,  [
                'class'=>'MyOrleansBundle:Media', 'choice_label'=>'page'
           ])*/
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyOrleansBundle\Entity\Residence'
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
