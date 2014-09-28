<?php

namespace MP\TheoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($var1) {
        return $this->render('MPTheoryBundle:Default:index.html.twig', array('var1' => $var1));
    }
}
