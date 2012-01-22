<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'ByteHistory\\ConnectionBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/login_check') {
            return array('_route' => 'login_check');
        }

        // ByteHistoryUserBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ByteHistory\\UserBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ByteHistoryUserBundle_homepage'));
        }

        // contact_me
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'ByteHistory\\ContactMeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'contact_me',);
        }

        // newsletter_index
        if ($pathinfo === '/newsletter') {
            return array (  '_controller' => 'ByteHistory\\NewsletterBundle\\Controller\\DefaultController::indexAction',  '_route' => 'newsletter_index',);
        }

        // partner_index
        if ($pathinfo === '/partner') {
            return array (  '_controller' => 'ByteHistory\\PartnerBundle\\Controller\\DefaultController::indexAction',  '_route' => 'partner_index',);
        }

        // partner_add
        if ($pathinfo === '/partner/add') {
            return array (  '_controller' => 'ByteHistory\\PartnerBundle\\Controller\\DefaultController::addAction',  '_route' => 'partner_add',);
        }

        // collaborator_index
        if ($pathinfo === '/collaborator') {
            return array (  '_controller' => 'ByteHistory\\CollaboratorBundle\\Controller\\DefaultController::indexAction',  '_route' => 'collaborator_index',);
        }

        // collaborator_search
        if ($pathinfo === '/collaborator/search') {
            return array (  '_controller' => 'ByteHistory\\CollaboratorBundle\\Controller\\DefaultController::searchAction',  '_route' => 'collaborator_search',);
        }

        // collaborator_add
        if ($pathinfo === '/collaborator/add') {
            return array (  '_controller' => 'ByteHistory\\CollaboratorBundle\\Controller\\DefaultController::addAction',  '_route' => 'collaborator_add',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'ByteHistory\\StartBundle\\Controller\\DefaultController::indexAction',  '_route' => '_welcome',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }
            return array (  '_controller' => 'ByteHistory\\StartBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // description
        if ($pathinfo === '/description') {
            return array (  '_controller' => 'ByteHistory\\StartBundle\\Controller\\DefaultController::descriptionAction',  '_route' => 'description',);
        }

        // recruitment
        if ($pathinfo === '/recruitment') {
            return array (  '_controller' => 'ByteHistory\\StartBundle\\Controller\\DefaultController::recruitmentAction',  '_route' => 'recruitment',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
