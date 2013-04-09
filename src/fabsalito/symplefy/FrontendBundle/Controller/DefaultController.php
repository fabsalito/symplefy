<?php

namespace fabsalito\symplefy\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	/**
	 * Frontend index action
	 *
	 */
    public function indexAction($user, $anio, $mes)
    {
        return $this->render('SymplefyFrontendBundle:Default:index.html.twig', array());
    }

    // PLANS
    public function planCreateAction($user)
    {
        return $this->render('SymplefyFrontendBundle:Default:planCreate.html.twig');
    }

    public function planReadAction($user, $anio, $mes)
    {
        return $this->render('SymplefyFrontendBundle:Default:planRead.html.twig');
    }

    public function planUpdateAction($user, $anio, $mes)
    {
        return $this->render('SymplefyFrontendBundle:Default:planUpdate.html.twig');
    }

    public function planDeleteAction($user, $anio, $mes)
    {
        return $this->render('SymplefyFrontendBundle:Default:planDelete.html.twig');
    }

    // PROJECTIONS
    public function forecastCreateAction($user)
    {
        return $this->render('SymplefyFrontendBundle:Default:forecastCreate.html.twig');
    }

    public function forecastReadAction($user, $anio, $mes)
    {
        return $this->render('SymplefyFrontendBundle:Default:forecastRead.html.twig');
    }

    public function forecastUpdateAction($user, $anio, $mes)
    {
        return $this->render('SymplefyFrontendBundle:Default:forecastUpdate.html.twig');
    }

    public function forecastDeleteAction($user, $anio, $mes)
    {
        return $this->render('SymplefyFrontendBundle:Default:forecastDelete.html.twig');
    }

    // TRANSACTIONS
    public function transactionCreateAction($user)
    {
        return $this->render('SymplefyFrontendBundle:Default:transactionCreate.html.twig');
    }

    public function transactionReadAction($user, $anio, $mes)
    {
        return $this->render('SymplefyFrontendBundle:Default:transactionRead.html.twig');
    }

    public function transactionUpdateAction($user, $anio, $mes)
    {
        return $this->render('SymplefyFrontendBundle:Default:transactionUpdate.html.twig');
    }

    public function transactionDeleteAction($user, $anio, $mes)
    {
        return $this->render('SymplefyFrontendBundle:Default:transactionDelete.html.twig');
    }
}
