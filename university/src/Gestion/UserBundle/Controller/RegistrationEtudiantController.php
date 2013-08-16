<?php

namespace Gestion\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class RegistrationEtudiantController extends Controller {
    
    public function registerAction()
    {
        return $this->container
                    ->get('pugx_multi_user.registration_manager')
                    ->register('Gestion\UserBundle\Entity\Etudiant');
    }
    
    
}

?>
