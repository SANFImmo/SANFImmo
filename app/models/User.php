<?php 

namespace App\Models;

use Core\Model;

class User extends Model
{
     

    protected $nom;

    protected $prenom;

    public function __construct()
    {
        $this->table = 'user';
    }

    

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom = $this->select('nom');
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}