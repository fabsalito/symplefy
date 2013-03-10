<?php

namespace fabsalito\EntryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EntryBundle:Default:index.html.twig', array('name' => $name));
    }
}
