<?php

namespace WCS\HackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WCSHackBundle:Default:index.html.twig');
    }
}
