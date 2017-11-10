<?php

namespace WCS\HackBundle\Form;

use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class commandeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('longitude', \Symfony\Component\Form\Extension\Core\Type\TextType::class, array(
                'label' => " ",
                'attr' => array('class' => 'hidden')
            ))
            ->add('latitude', \Symfony\Component\Form\Extension\Core\Type\TextType::class, array(
                'label' => " ",
                'attr' => array('class' => 'hidden', 'value' => '0')
            ))
            ->add('statut', \Symfony\Component\Form\Extension\Core\Type\TextType::class, array(
                'label' => " ",
                'attr' => array('value' => '0')
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WCS\HackBundle\Entity\commande'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'wcs_hackbundle_commande';
    }


}
