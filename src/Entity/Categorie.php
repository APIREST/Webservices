<?php
# src/Entity/User.php

namespace livraisons\Entity;

use Doctrine\ORM\Mapping as ORM;
//use DoctrineCommonCollectionsArrayCollection;


/**
* @ORM\Entity
* @ORM\Table(name="categories")
*/
class Categorie
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
    private $nom;



    /**
     * @var ArrayCollection $produits
     *
     * @ORM\OneToMany(targetEntity="Produit", mappedBy="categorie", cascade={"persist", "remove", "merge"})
     */
    private $produits;


     public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

     public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function addProduit(Produit $produit) {
        $produit->setCategorie($this);
 
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
        }
    }
 
    /**
     * @return ArrayCollection $produits
     */
    public function getProduits() {
        return $this->produits;
    }

    public function __construct() {
        $this->produits = new ArrayCollection();
    }

}