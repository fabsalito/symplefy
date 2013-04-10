<?php

namespace fabsalito\symplefy\FrontendBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseController;

class SecurityController extends BaseController
{
    public function collaboratorAction()
    {
        return $this->render('SymplefyFrontendBundle:Security:collaborator.html.twig');
    }
}