<?php
# src/Entity/User.php

namespace livraisons\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="zones")
*/
class Zone
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
     * @var ArrayCollection $listproduit
     *
     * @ORM\OneToMany(targetEntity="Produit", mappedBy="zone",cascade={"persist", "remove", "merge"})
     */
    private $listproduit;


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
        $produit->setClients($this);
        $this->listproduit->add($produit);
        
    }

    public function __construct() {
        $this->$listproduit = new ArrayCollection();
    }

}