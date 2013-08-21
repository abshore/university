<?php
namespace Gestion\UserBundle\Listener;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpKernel\KernelEvents;
 
class LoginRedirectionListener
{  
    private $router;
    private $dispatcher;
 
    public function __construct(Router $router, EventDispatcher $dispatcher)
    {
        // On enregistre les services dont on a besoin
        $this->router = $router;
        $this->dispatcher = $dispatcher;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        // On demande a écouter une fois l'évènement kernel.response
        $this->dispatcher->addListener(KernelEvents::RESPONSE, array($this, 'redirectUserToProfilePage'));
    }
   
    public function redirectUserToProfilePage(FilterResponseEvent $event)
    {
        // on effectue la redirection
        $response = new RedirectResponse($this->router->generate('admin'));
        $event->setResponse($response);
    }}


?>
