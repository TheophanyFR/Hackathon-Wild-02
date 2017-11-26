<?php

namespace WCS\HackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="WCS\HackBundle\Repository\commandeRepository")
 */
class commande
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="integer")
     */
    private $statut;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="produit", inversedBy="id")
     */
    private $produit;



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
     * @return commande
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return commande
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return commande
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return commande
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return commande
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     *
     * @return commande
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return int
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set panier
     *
     * @param \WCS\HackBundle\Entity\panier $panier
     *
     * @return commande
     */
    public function setPanier(\WCS\HackBundle\Entity\panier $panier = null)
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
     * Set produit
     *
     * @param integer $produit
     *
     * @return commande
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return integer
     */
    public function getProduit()
    {
        return $this->produit;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->produit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add produit
     *
     * @param \WCS\HackBundle\Entity\produit $produit
     *
     * @return commande
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
