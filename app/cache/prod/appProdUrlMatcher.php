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
        $context = $this->context;
        $request = $this->request;

        // mp_default_homepage
        if ($pathinfo === '/theory') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_mp_default_homepage;
            }

            return array (  '_controller' => 'MP\\DefaultBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mp_default_homepage',);
        }
        not_mp_default_homepage:

        // mp_default_about
        if ($pathinfo === '/about') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_mp_default_about;
            }

            return array (  '_controller' => 'MP\\DefaultBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'mp_default_about',);
        }
        not_mp_default_about:

        // mp_default_contact
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_mp_default_contact;
            }

            return array (  '_controller' => 'MP\\DefaultBundle\\Controller\\DefaultController::contactAction',  '_route' => 'mp_default_contact',);
        }
        not_mp_default_contact:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
