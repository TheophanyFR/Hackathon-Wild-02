<?php

namespace WCS\HackBundle\Controller;

use WCS\HackBundle\Entity\produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;


/**
 * Produit controller.
 *
 * @Route("test")
 */
class showProductController extends Controller
{
    /**
     * Lists all produit entities.
     *
     * @Route("/", name="test_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $produits = $em->getRepository('WCSHackBundle:produit')->findAll();

        return $this->render('produit/produit.html.twig', array(
            'produits' => $produits,
        ));
    }

    /**
     * Finds and displays a produit entity.
     *
     * @Route("/{id}", name="test_show")
     * @Method("GET")
     */
    public function showAction(produit $produit)
    {

        return $this->render('produit/oneproduit.html.twig', array(
            'produit' => $produit,
        ));
    }

}

