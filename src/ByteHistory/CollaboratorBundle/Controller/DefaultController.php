<?php

namespace ByteHistory\CollaboratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('ByteHistoryCollaboratorBundle:Default:index.html.twig');
    }
    
    public function searchAction(){
        return $this->render('ByteHistoryCollaboratorBundle:Default:search.html.twig');
    }
    
    public function addAction(){
        return $this->render('ByteHistoryCollaboratorBundle:Default:add.html.twig');
    }
}
