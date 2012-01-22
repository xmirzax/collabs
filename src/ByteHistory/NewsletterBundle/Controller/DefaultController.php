<?php

namespace ByteHistory\NewsletterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('ByteHistoryNewsletterBundle:Default:index.html.twig');
    }
}
