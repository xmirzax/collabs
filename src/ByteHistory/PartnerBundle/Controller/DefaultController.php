<?php

namespace ByteHistory\PartnerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('ByteHistoryPartnerBundle:Default:index.html.twig');
    }
    
    public function addAction()
    {
        return $this->render('ByteHistoryPartnerBundle:Default:add.html.twig');
    }
}
