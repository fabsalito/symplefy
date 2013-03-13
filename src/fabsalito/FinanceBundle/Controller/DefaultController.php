<?php

namespace fabsalito\FinanceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('fabsalitoFinanceBundle:Default:index.html.twig', array('name' => $name));
    }
}
