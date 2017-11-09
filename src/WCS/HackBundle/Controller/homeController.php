<?php

namespace WCS\HackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class homeController extends Controller
{
    public function indexAction()
    {
        return $this->render('::index.html.twig');
    }
}
