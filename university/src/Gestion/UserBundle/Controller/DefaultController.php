<?php

namespace Gestion\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GestionUserBundle:Default:index.html.twig', array('name' => $name));
    }
    public function DashboardAction()
    {
        $csrfToken = $this->container->has('form.csrf_provider')
            ? $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate')
            : null;
        return $this->render('GestionUserBundle:Default:dashboard.html.twig', array(
               
               'last_username' => null,
               'error'         => null,
                'csrf_token' =>$csrfToken
            ));
    }
}
