<?php
/**
 * Created by PhpStorm.
 * User: coralie
 * Date: 10/11/17
 * Time: 04:38
 */

namespace WCS\HackBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 * PapaNoel controller.
 *
 * @Route("papaNoel")
 */
class papaNoelController extends Controller
{
    /**
     * Lists all PapaNoel entities.
     *
     * @Route("/")
     */
    public function proloAction(){
        return $this->render('papaNoel/papaNoel.html.twig');
    }
}