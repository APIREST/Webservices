<?php
# src/Entity/User.php

namespace livraisons\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\MappedSuperclass
*/
class User
{   

	 /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id;
    
    /**
    * @ORM\Column(type="string")
    */
    protected $nom;

    /**
    * @ORM\Column(type="string")
    */
    protected $prenom;
    
    /**
    * @ORM\Column(type="string")
    */
    protected $adresse;
    
    /**
    * @ORM\Column(type="string")
    */
    protected $email;
    
    /**
    * @ORM\Column(type="string")
    */
    protected $numeros;


    // getters et setters

     

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

     public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getNumeros()
    {
        return $this->numeros;
    }

    public function setNumeros($numeros)
    {
        $this->numeros = $numeros;
    }
    

}