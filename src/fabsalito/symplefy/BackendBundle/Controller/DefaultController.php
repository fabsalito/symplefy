<?php

namespace fabsalito\symplefy\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SymplefyBackendBundle:Default:index.html.twig', array('name' => $name));
    }
}
