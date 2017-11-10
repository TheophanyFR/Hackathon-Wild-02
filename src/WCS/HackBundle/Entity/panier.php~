<?php

namespace WCS\HackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * panier
 *
 * @ORM\Table(name="panier")
 * @ORM\Entity(repositoryClass="WCS\HackBundle\Repository\panierRepository")
 */
class panier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nom = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add nom
     *
     * @param \WCS\HackBundle\Entity\produit $nom
     *
     * @return panier
     */
    public function addNom(\WCS\HackBundle\Entity\produit $nom)
    {
        $this->nom[] = $nom;

        return $this;
    }

    /**
     * Remove nom
     *
     * @param \WCS\HackBundle\Entity\produit $nom
     */
    public function removeNom(\WCS\HackBundle\Entity\produit $nom)
    {
        $this->nom->removeElement($nom);
    }

    /**
     * Get nom
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom
     *
     * @param \WCS\HackBundle\Entity\commande $nom
     *
     * @return panier
     */
    public function setNom(\WCS\HackBundle\Entity\commande $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Set panier
     *
     * @param \WCS\HackBundle\Entity\commande $panier
     *
     * @return panier
     */
    public function setPanier(\WCS\HackBundle\Entity\commande $panier = null)
    {
        $this->panier = $panier;

        return $this;
    }

    /**
     * Get panier
     *
     * @return \WCS\HackBundle\Entity\commande
     */
    public function getPanier()
    {
        return $this->panier;
    }

    /**
     * Set produit
     *
     * @param \WCS\HackBundle\Entity\produit $produit
     *
     * @return panier
     */
    public function setProduit(\WCS\HackBundle\Entity\produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \WCS\HackBundle\Entity\produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Add produit
     *
     * @param \WCS\HackBundle\Entity\produit $produit
     *
     * @return panier
     */
    public function addProduit(\WCS\HackBundle\Entity\produit $produit)
    {
        $this->produit[] = $produit;

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \WCS\HackBundle\Entity\produit $produit
     */
    public function removeProduit(\WCS\HackBundle\Entity\produit $produit)
    {
        $this->produit->removeElement($produit);
    }
}
