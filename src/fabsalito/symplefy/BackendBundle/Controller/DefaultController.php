<?php

namespace fabsalito\symplefy\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	/**
	 * Backend index action
	 *
	 */
    public function indexAction()
    {
        return $this->render('SymplefyBackendBundle:Default:index.html.twig', array());
    }
}
