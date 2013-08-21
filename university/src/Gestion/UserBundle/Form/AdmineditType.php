<?php

namespace Gestion\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdmineditType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
           
            ->add('email')
            ->add('tel')
            ->add('mobile')
            ->add('cv')
            ->add('presentation')
            ->add('plainPassword')
            ->add('nom')
            ->add('prenom')
            ->add('doc','file', array(
                'data_class' => null)  )
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\UserBundle\Entity\Admin',
          
        ));
    }

    public function getName() {
        return 'gestion_userbundle_adminedittype';
    }

}
