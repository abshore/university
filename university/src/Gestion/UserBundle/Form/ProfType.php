<?php

namespace Gestion\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
              ->add('username')
            ->add('email')
            ->add('tel')
            ->add('mobile')
            ->add('cv')
            ->add('presentation')
            ->add('enabled')
            ->add('plainPassword')
            ->add('expired')
            ->add('expiresAt')
            ->add('roles', 'choice', array(
                    'choices'   => array('ROLE_PROF' => 'ROLE_PROF', 'ROLE_ETUDIANT' => 'ROLE_ETUDIANT','ROLE_ADMIN'=>'ROLE_ADMIN'),
                     'multiple'  => true,
                   ))
            ->add('nom')
            ->add('prenom')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\UserBundle\Entity\Prof'
        ));
    }

    public function getName()
    {
        return 'gestion_userbundle_proftype';
    }
}
