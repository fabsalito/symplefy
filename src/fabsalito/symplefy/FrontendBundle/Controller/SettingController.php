<?php

namespace fabsalito\symplefy\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SettingController extends Controller
{
    public function conceptAction($user)
    {
        return $this->render('SymplefyFrontendBundle:Setting:concept.html.twig');
    }

    public function accountAction()
    {
        return $this->render('SymplefyFrontendBundle:Setting:account.html.twig');
    }

    public function creditCardAction()
    {
        return $this->render('SymplefyFrontendBundle:Setting:creditCard.html.twig');
    }

    public function shopAction()
    {
        return $this->render('SymplefyFrontendBundle:Setting:shop.html.twig');
    }
}