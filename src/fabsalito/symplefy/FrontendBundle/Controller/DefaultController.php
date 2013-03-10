<?php

namespace fabsalito\symplefy\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SymplefyFrontendBundle:Default:index.html.twig', array('name' => $name));
    }
}
