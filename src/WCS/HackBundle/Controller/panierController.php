<?php

namespace WCS\HackBundle\Controller;

use WCS\HackBundle\Entity\panier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Panier controller.
 *
 * @Route("panier")
 */
class panierController extends Controller
{

    /**
     *
     *
     * @Route("ajouter_panier", name="ajouter")
     * @Method("GET")
     */
    public function ajouterAction($id)
    {
        $session = $this->getRequest()->getSession();

        if (!$session->has('panier')) $session ->set('panier',array());

        $panier = $session->get('panier');


        if (array_key_exists($id, $panier)) {
            if ($this->getRequest()->query->get('qte') != null) $panier['$id'] = $this->getRequest()->query->get('qte');
        } else {
            if ($this->getRequest()->query->get('qte') != null)
                $panier[$id] = $this->getRequest()->query->get('qte');
            else
                $panier[$id] = 1;

        }
            $session->set('panier', $panier);
            return $this->redirect($this->generateUrl('panier/index.html.twig'));
    }



    /**
     *
     *
     * @Route("/", name="panier_index")
     * @Method("GET")
     */
    public function panierAction()
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has('panier')) $session->set('panier', array());

        var_dump($session->get('panier'));
        die();

        return $this->render('panier/index.html.twig');


    }



    /**
     * Lists all panier entities.
     *
     * @Route("/", name="panier_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $paniers = $em->getRepository('WCSHackBundle:panier')->findAll();

        return $this->render('panier/index.html.twig', array(
            'paniers' => $paniers,
        ));
    }

    /**
     * Creates a new panier entity.
     *
     * @Route("/new", name="panier_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $panier = new Panier();
        $form = $this->createForm('WCS\HackBundle\Form\panierType', $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($panier);
            $em->flush();

            return $this->redirectToRoute('panier_show', array('id' => $panier->getId()));
        }

        return $this->render('panier/new.html.twig', array(
            'panier' => $panier,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a panier entity.
     *
     * @Route("/{id}", name="panier_show")
     * @Method("GET")
     */
    public function showAction(panier $panier)
    {
        $deleteForm = $this->createDeleteForm($panier);

        return $this->render('panier/show.html.twig', array(
            'panier' => $panier,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing panier entity.
     *
     * @Route("/{id}/edit", name="panier_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, panier $panier)
    {
        $deleteForm = $this->createDeleteForm($panier);
        $editForm = $this->createForm('WCS\HackBundle\Form\panierType', $panier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('panier_edit', array('id' => $panier->getId()));
        }

        return $this->render('panier/edit.html.twig', array(
            'panier' => $panier,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a panier entity.
     *
     * @Route("/{id}", name="panier_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, panier $panier)
    {
        $form = $this->createDeleteForm($panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($panier);
            $em->flush();
        }

        return $this->redirectToRoute('panier_index');
    }

    /**
     * Creates a form to delete a panier entity.
     *
     * @param panier $panier The panier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(panier $panier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('panier_delete', array('id' => $panier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
