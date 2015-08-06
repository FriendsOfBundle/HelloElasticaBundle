<?php

namespace FOB\HelloElasticaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FOBHelloElasticaBundle:Default:index.html.twig', array('name' => $name));
    }
}
