<?php

namespace WCS\HackBundle\Controller;

use WCS\HackBundle\Entity\commande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use WCS\HackBundle\Entity\produit;

/**
 * Commande controller.
 *
 * @Route("commande")
 */
class commandeController extends Controller
{
    /**
     * Lists all commande entities.
     *
     * @Route("/", name="commande_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commandes = $em->getRepository('WCSHackBundle:commande')->findAll();
        $produits = $em->getRepository('WCSHackBundle:commande')->findAll();
        return $this->render('commande/index.html.twig', array(
            'commandes' => $commandes,
            'produits' => $produits,
        ));
    }

    /**
     * Lists all commande entities for santa.
     *
     * @Route("/papa", name="commande_papa")
     * @Method("GET")
     */
    public function indexActionPapa()
    {
        $em = $this->getDoctrine()->getManager();

        $commandes = $em->getRepository('WCSHackBundle:commande')->findAll();
        $produits = $em->getRepository('WCSHackBundle:commande')->findAll();
        return $this->render('commande/indexpapa.html.twig', array(
            'commandes' => $commandes,
            'produits' => $produits,
        ));
    }

    /**
     * Creates a new commande entity.
     *
     * @Route("/new/{id}", name="commande_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(produit $produit, Request $request)
    {
        $commande = new commande();

        $form = $this->createForm('WCS\HackBundle\Form\commandeType', $commande);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $commande->setProduit($produit);
            $em->persist($commande);
            $em->flush();

            return $this->redirectToRoute('commande_show', array('id' => $commande->getId()));
        }

        return $this->render('commande/new.html.twig', array(
            'commande' => $commande,
            'produit'=>$produit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a commande entity.
     *
     * @Route("/{id}", name="commande_show")
     * @Method("GET")
     */
    public function showAction(produit $produit ,commande $commande)
    {
        $deleteForm = $this->createDeleteForm($commande);
        $commande->setProduit($produit);
        return $this->render('commande/show.html.twig', array(
            'commande' => $commande,
            'produit' => $produit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing commande entity.
     *
     * @Route("/{id}/edit", name="commande_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, commande $commande, produit $produit)
    {
        $deleteForm = $this->createDeleteForm($commande);
        $editForm = $this->createForm('WCS\HackBundle\Form\commandeType', $commande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $commande->setProduit($produit);
            return $this->redirectToRoute('commande_edit', array('id' => $commande->getId()));
        }

        return $this->render('commande/edit.html.twig', array(
            'commande' => $commande,
            'produit' => $produit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a commande entity.
     *
     * @Route("/{id}", name="commande_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, commande $commande)
    {
        $form = $this->createDeleteForm($commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commande);
            $em->flush();
        }

        return $this->redirectToRoute('commande_index');
    }

    /**
     * Creates a form to delete a commande entity.
     *
     * @param commande $commande The commande entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(commande $commande)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commande_delete', array('id' => $commande->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


}
