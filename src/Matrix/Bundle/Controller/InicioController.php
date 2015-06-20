<?php

namespace Matrix\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InicioController extends Controller
{
    public function indexAction()
    {
        return $this->render('MatrixBundle:Inicio:inicio.html.twig');
    }
}