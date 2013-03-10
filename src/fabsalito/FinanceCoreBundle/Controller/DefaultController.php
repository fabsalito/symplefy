<?php

namespace fabsalito\FinanceCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FinanceCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
