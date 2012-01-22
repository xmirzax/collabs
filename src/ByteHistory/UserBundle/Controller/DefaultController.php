<?php

namespace ByteHistory\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('ByteHistoryUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
