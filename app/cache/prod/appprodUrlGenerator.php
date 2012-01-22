<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'login' => true,
       'login_check' => true,
       'ByteHistoryUserBundle_homepage' => true,
       'contact_me' => true,
       'newsletter_index' => true,
       'partner_index' => true,
       'partner_add' => true,
       'collaborator_index' => true,
       'collaborator_search' => true,
       'collaborator_add' => true,
       '_welcome' => true,
       'homepage' => true,
       'description' => true,
       'recruitment' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getloginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ByteHistory\\ConnectionBundle\\Controller\\DefaultController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getByteHistoryUserBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'ByteHistory\\UserBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getcontact_meRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ByteHistory\\ContactMeBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getnewsletter_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ByteHistory\\NewsletterBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/newsletter',  ),));
    }

    private function getpartner_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ByteHistory\\PartnerBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/partner',  ),));
    }

    private function getpartner_addRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ByteHistory\\PartnerBundle\\Controller\\DefaultController::addAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/partner/add',  ),));
    }

    private function getcollaborator_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ByteHistory\\CollaboratorBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/collaborator',  ),));
    }

    private function getcollaborator_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ByteHistory\\CollaboratorBundle\\Controller\\DefaultController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/collaborator/search',  ),));
    }

    private function getcollaborator_addRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ByteHistory\\CollaboratorBundle\\Controller\\DefaultController::addAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/collaborator/add',  ),));
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ByteHistory\\StartBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function gethomepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ByteHistory\\StartBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getdescriptionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ByteHistory\\StartBundle\\Controller\\DefaultController::descriptionAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/description',  ),));
    }

    private function getrecruitmentRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ByteHistory\\StartBundle\\Controller\\DefaultController::recruitmentAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/recruitment',  ),));
    }
}
