<?php
# src/Entity/User.php

namespace livraisons\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="admins")
*/
class Admin extends User
{   

}