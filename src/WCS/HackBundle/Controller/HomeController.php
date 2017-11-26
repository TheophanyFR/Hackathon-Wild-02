<?php

namespace WCS\HackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class HomeController extends Controller
{
    /**
     * Lists all epileptic entities.
     *
     * @Route("/")
     */
    public function epilepticAction(){
        return $this->render('::index.html.twig');
    }
}