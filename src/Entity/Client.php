<?php
# src/Entity/User.php

namespace livraisons\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="clients")
*/
class Client extends User
{   

    
    /**
    * @ORM\Column(type="decimal")
    */
    private $latitude;

    /**
    * @ORM\Column(type="decimal")
    */
    private $longitude;


    /**
     * @var ArrayCollection $commandesclient
     *
     * @ORM\OneToMany(targetEntity="Commande", mappedBy="clients")
     */
    private $commandesclient;



    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude=$latitude;
    }


    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function addCommande(Commande $commande) {
        $commande->setClients($this);
        $this->commandesclient->add($commande);
        
    }

    public function __construct() {
        $this->$commandesclient = new ArrayCollection();
    }
}