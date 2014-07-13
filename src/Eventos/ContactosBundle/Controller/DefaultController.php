<?php

namespace Eventos\ContactosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ContactosBundle:Default:index.html.twig', array('name' => $name));
    }
}
