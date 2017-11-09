<?php

namespace WCS\HackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 * HomeElfe controller.
 *
 * @Route("homeElfe")
 */
class HomeElfeController extends Controller
{
    /**
     * Lists all HomeElfe entities.
     *
     * @Route("/")
     */
    public function proloAction(){
        return $this->render('homeElfe/homeElfe.html.twig');
    }
}