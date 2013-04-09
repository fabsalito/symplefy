<?php

namespace fabsalito\symplefy\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReportingController extends Controller
{
    public function actualVsPlanAction($user, $anio, $mes)
    {
        return $this->render('SymplefyFrontendBundle:Reporting:actualVsPlan.html.twig');
    }
}