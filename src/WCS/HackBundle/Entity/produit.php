<?php

namespace WCS\HackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="WCS\HackBundle\Repository\produitRepository")
 */
class produit
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
     * @var int
     * @ORM\OneToMany(targetEntity="commande", mappedBy="id")
     */
    private $commande;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="temps", type="integer")
     */
    private $temps;





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
     * Set nom
     *
     * @param string $nom
     *
     * @return produit
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return produit
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set temps
     *
     * @param integer $temps
     *
     * @return produit
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
    }

    /**
     * Get temps
     *
     * @return int
     */
    public function getTemps()
    {
        return $this->temps;
    }



    /**
     * Set produitId
     *
     * @param \WCS\HackBundle\Entity\panier $produitId
     *
     * @return produit
     */
    public function setProduitId(\WCS\HackBundle\Entity\panier $produitId)
    {
        $this->produit_id = $produitId;

        return $this;
    }

    /**
     * Get produitId
     *
     * @return \WCS\HackBundle\Entity\panier
     */
    public function getProduitId()
    {
        return $this->produit_id;
    }

    /**
     * Set produit
     *
     * @param \WCS\HackBundle\Entity\panier $produit
     *
     * @return produit
     */
    public function setProduit(\WCS\HackBundle\Entity\panier $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \WCS\HackBundle\Entity\panier
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set panier
     *
     * @param \WCS\HackBundle\Entity\panier $panier
     *
     * @return produit
     */
    public function setPanier(\WCS\HackBundle\Entity\panier $panier)
    {
        $this->panier = $panier;

        return $this;
    }

    /**
     * Get panier
     *
     * @return \WCS\HackBundle\Entity\panier
     */
    public function getPanier()
    {
        return $this->panier;
    }

    /**
     * Set commande
     *
     * @param integer $commande
     *
     * @return produit
     */
    public function setCommande($commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return integer
     */
    public function getCommande()
    {
        return $this->commande;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commande = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commande
     *
     * @param \WCS\HackBundle\Entity\commande $commande
     *
     * @return produit
     */
    public function addCommande(\WCS\HackBundle\Entity\commande $commande)
    {
        $this->commande[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \WCS\HackBundle\Entity\commande $commande
     */
    public function removeCommande(\WCS\HackBundle\Entity\commande $commande)
    {
        $this->commande->removeElement($commande);
    }
}
