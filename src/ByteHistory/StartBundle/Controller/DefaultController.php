<?php

namespace ByteHistory\StartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('ByteHistoryStartBundle:Default:index.html.twig');
    }
    
    public function descriptionAction()
    {
        return $this->render('ByteHistoryStartBundle:Default:description.html.twig');
    }
    
    public function recruitmentAction()
    {
        return $this->render('ByteHistoryStartBundle:Default:recruitment.html.twig');
    }
}
