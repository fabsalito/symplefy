<?php

namespace fabsalito\symplefy\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TwitterController extends Controller
{
    public function indexAction()
    {
        return $this->render('SymplefyFrontendBundle:Twitter:index.html.twig');
    }
}