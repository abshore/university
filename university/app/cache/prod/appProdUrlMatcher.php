<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // gestion_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_user_homepage')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/etudiant')) {
            // etudiant
            if (rtrim($pathinfo, '/') === '/etudiant') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'etudiant');
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::indexAction',  '_route' => 'etudiant',);
            }

            // etudiant_show
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::showAction',));
            }

            // etudiant_new
            if ($pathinfo === '/etudiant/new') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::newAction',  '_route' => 'etudiant_new',);
            }

            // etudiant_create
            if ($pathinfo === '/etudiant/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_etudiant_create;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::createAction',  '_route' => 'etudiant_create',);
            }
            not_etudiant_create:

            // etudiant_edit
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::editAction',));
            }

            // etudiant_update
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_etudiant_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::updateAction',));
            }
            not_etudiant_update:

            // etudiant_delete
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_etudiant_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\EtudiantController::deleteAction',));
            }
            not_etudiant_delete:

        }

        if (0 === strpos($pathinfo, '/prof')) {
            // prof
            if (rtrim($pathinfo, '/') === '/prof') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'prof');
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::indexAction',  '_route' => 'prof',);
            }

            // prof_show
            if (preg_match('#^/prof/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::showAction',));
            }

            // prof_new
            if ($pathinfo === '/prof/new') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::newAction',  '_route' => 'prof_new',);
            }

            // prof_create
            if ($pathinfo === '/prof/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_prof_create;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::createAction',  '_route' => 'prof_create',);
            }
            not_prof_create:

            // prof_edit
            if (preg_match('#^/prof/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::editAction',));
            }

            // prof_update
            if (preg_match('#^/prof/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_prof_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::updateAction',));
            }
            not_prof_update:

            // prof_delete
            if (preg_match('#^/prof/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_prof_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\ProfController::deleteAction',));
            }
            not_prof_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

            // admin_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::showAction',));
            }

            // admin_new
            if ($pathinfo === '/admin/new') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::newAction',  '_route' => 'admin_new',);
            }

            // admin_create
            if ($pathinfo === '/admin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_create;
                }

                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::createAction',  '_route' => 'admin_create',);
            }
            not_admin_create:

            // admin_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::editAction',));
            }

            // admin_update
            if (preg_match('#^/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::updateAction',));
            }
            not_admin_update:

            // admin_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'Gestion\\UserBundle\\Controller\\AdminController::deleteAction',));
            }
            not_admin_delete:

        }

        if (0 === strpos($pathinfo, '/register')) {
            // user_etudiant_registration
            if ($pathinfo === '/register/etudiant') {
                return array (  '_controller' => 'Gestion\\UserBundle\\Controller\\RegistrationEtudiantController::registerAction',  '_route' => 'user_etudiant_registration',);
            }

            // user_prof_registration
            if ($pathinfo === '/register/prof') {
                return array (  '_controller' => 'AcmeUserBundle:RegistrationProf:register',  '_route' => 'user_prof_registration',);
            }

            // user_admin_registration
            if ($pathinfo === '/register/admin') {
                return array (  '_controller' => 'AcmeUserBundle:RegistrationAdmin:register',  '_route' => 'user_admin_registration',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
