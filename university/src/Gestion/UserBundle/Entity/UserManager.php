<?php

namespace Gestion\UserBundle\Entity;
 
use FOS\UserBundle\Entity\UserManager as BaseUserManager;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
 
class UserManager extends BaseUserManager
{
    public function loadUserByEmail($email)
    {
        $user = $this->findUserByEmail($email);
 
        if (!$user) {
            throw new EmailNotFoundException(sprintf('L\'adresse email "%s" est invalide.', $email));
        }
 
        return $user;
    }
}
?>
