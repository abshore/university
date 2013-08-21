<?php

namespace Gestion\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EtudiantpwdType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
              
            
            ->add('plainPassword')
           
            
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\UserBundle\Entity\Etudiant',
            'roles' => null
        ));
    }

   
    public function getName() {
        return 'gestion_userbundle_etudiantedittype';
    }
  
}
