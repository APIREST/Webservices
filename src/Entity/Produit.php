<?php
# src/Entity/User.php

namespace livraisons\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="produits")
*/
class Produit
{   

	 /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id;
    
    /**
    * @ORM\Column(type="string")
    */
    private $libelle;


    /**
    * @ORM\Column(type="string")
    */
    private $url;

    /**
    * @ORM\Column(type="string")
    */
    private $description;


    /**
    * @ORM\Column(type="integer")
    */
    private $quantite;


    /**
    * @ORM\Column(type="decimal")
    */
    private $prix;


    /**
     * @var Categorie $categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="produits", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="Categorie_idcategorie", referencedColumnName="id")
     * })
     */
    private $categorie;


    /**
     * @var Zone $zone
     *
     * @ORM\ManyToOne(targetEntity="Zone", inversedBy="listproduit", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="zone_id", referencedColumnName="id")
     * })
     */
    private $zone;

    
    /**
     * @var ArrayCollection $commandes
     *
     * @ORM\OneToMany(targetEntity="Commande", mappedBy="produits")
     */
    private $commandes;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

     public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    
    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }


    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }

    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix= $prix;
    }

    public function setCategorie(categorie $categorie)
    {
        $this->categorie = $categorie;
    }


    public function getZone()
    {
        return $this->zone;
    }

    public function setZone($zone)
    {
        $this->zone= $zone;
    }
 
    /**
     * @return Categorie $categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    public function addCommande(Commande $commande) {
        $commande->setProduits($this);
        $this->commandes->add($commande);
        
    }

    public function __construct() {
        $this->$commandes = new ArrayCollection();
    }

}