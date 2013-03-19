<?php

namespace fabsalito\symplefy\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	/**
	 * Frontend index action
	 *
	 */
    public function indexAction()
    {
        return $this->render('SymplefyFrontendBundle:Default:index.html.twig', array());
    }
}
