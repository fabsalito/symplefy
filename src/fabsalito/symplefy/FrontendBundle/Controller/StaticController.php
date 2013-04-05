<?php

namespace fabsalito\symplefy\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticController extends Controller
{
    public function globalAction($page)
    {
        return $this->render('SymplefyFrontendBundle:Static:'.$page.'.html.twig', array());
    }
}