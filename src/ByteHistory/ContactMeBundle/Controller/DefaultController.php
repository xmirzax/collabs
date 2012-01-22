<?php

namespace ByteHistory\ContactMeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('ByteHistoryContactMeBundle:Default:index.html.twig');
    }
}
