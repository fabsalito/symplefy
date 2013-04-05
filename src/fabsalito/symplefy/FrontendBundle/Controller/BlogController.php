<?php

namespace fabsalito\symplefy\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('SymplefyFrontendBundle:Blog:index.html.twig');
    }
}