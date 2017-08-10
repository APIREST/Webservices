<?php
# src/Entity/User.php

namespace livraisons\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="sessions")
*/
class Session
{   

	 /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id;

    /**
    * @ORM\Column(type="datetime")
    */
    private $heure_fermeture;


    /**
    * @ORM\Column(type="datetime")
    */
    private $heure_ouverture;


    /**
     * @var User $user
     *
     * @ORM\ManyToOne(targetEntity="Session", inversedBy="sessions", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getHeureOuver()
    {
        return $this->heure_ouverture;
    }

    public function setHeureOuver($heure_ouverture)
    {
        $this->heure_ouverture = $heure_ouverture;
    }


    public function getHeureFerm()
    {
        return $this->heure_fermeture;
    }

    public function setHeureFerm($heure_fermeture)
    {
        $this->heure_fermeture = $heure_fermeture;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

}