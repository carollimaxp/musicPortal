<?php

namespace MP\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction() {
        
        return $this->render('MPDefaultBundle:Default:index.html.twig');
    }
    
    public function aboutAction() {
     
        return $this->render('MPDefaultBundle:StaticPages:about.html.twig');
    }
}
