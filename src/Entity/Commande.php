<?php
# src/Entity/User.php

namespace livraisons\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="commande")
*/
class Commande
{   
   
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id;

    
    /**
    * @ORM\Column(type="integer")
    */
    private $quantite;

    /**
    * @ORM\Column(type="integer")
    */
    private $numeroC;

    /**
    * @ORM\Column(type="date")
    */
    private $dateC;

    /**
    * @ORM\Column(type="decimal")
    */
    private $montant;
    
    

    /**
     * @var Client $clients
     *
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="$commandesclient")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     * })
     */
    private $clients;


    /**
     * @var Produit $produits
     *
     * @ORM\ManyToOne(targetEntity="Produit", inversedBy="$commandes")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="id_produit", referencedColumnName="id")
     * })
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



    public function getQuantite()
    {
        return $this->quantite;
    }

    public function setQuantite($quantite)
    {
        $this->quantite=$quantite;
    }


    public function getNumeroC()
    {
        return $this->numeroC;
    }

    public function setNumeroC($numeroC)
    {
        $this->numeroC = $numeroC;
    }


    public function getDateC()
    {
        return $this->dateC;
    }

    public function setDateC($dateC)
    {
        $this->dateC=$dateC;
    }


    public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant($montant)
    {
        $this->montant=$montant;
    }


    public function setClients(Client $clients)
    {
        $this->clients = $clients;
    }
 
    /**
     * @return Client $clients
     */
    public function getClients()
    {
        return $this->clients;
    }

    public function setProduits(Produit $produits)
    {
        $this->produits = $produits;
    }
 
    /**
     * @return Produit $produits
     */
    public function getproduits()
    {
        return $this->produits;
    }

}