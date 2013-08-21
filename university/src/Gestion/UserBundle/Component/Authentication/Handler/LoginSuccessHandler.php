<?php

namespace Gestion\UserBundle\Component\Authentication\Handler;
 
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;
 
class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
 
    protected $router;
    protected $security;
 
    public function __construct(Router $router, SecurityContext $security)
    {
        $this->router = $router;
        $this->security = $security;
    }
 
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {   
       $lastlogin= $this->security->getToken()->getUser()->getNew();
        
        
        if ($this->security->isGranted('ROLE_ETUDIANT') && $lastlogin==0)
        {
            $response = new RedirectResponse($this->router->generate('etudiant_editpwd'));            
        }
        elseif  ($this->security->isGranted('ROLE_ETUDIANT') && $lastlogin!=0)
        {
            $response = new RedirectResponse($this->router->generate('etudiant'));            
        }
        elseif ($this->security->isGranted('ROLE_ADMIN'))
        {
            $response = new RedirectResponse($this->router->generate('admin'));
        } 
        elseif ($this->security->isGranted('ROLE_PROF'))
        {
            $response = new RedirectResponse($this->router->generate('prof'));
        }
        elseif ($this->security->isGranted('ROLE_USER'))
        {
            // redirect the user to where they were before the login process begun.
            $referer_url = $request->headers->get('referer');
 
            $response = new RedirectResponse($referer_url);
        }  
 
        return $response;
    }
 
}

?>
