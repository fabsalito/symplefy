<?php

namespace fabsalito\symplefy\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    public function profileAction($user)
    {
        return $this->render('SymplefyFrontendBundle:Security:profile.html.twig');
    }

    public function loginAction()
    {
        return $this->render('SymplefyFrontendBundle:Security:login.html.twig');
    }

    public function registerAction()
    {
        return $this->render('SymplefyFrontendBundle:Security:register.html.twig');
    }

    public function collaboratorAction()
    {
        return $this->render('SymplefyFrontendBundle:Security:collaborator.html.twig');
    }
}