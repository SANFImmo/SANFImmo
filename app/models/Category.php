<?php 

namespace App\Models;

use Core\Model;

class Category extends Model
{
     

    protected $nom;

    public function __construct()
    {
        $this->_table = 'categories';
    }

    public function getArrayFields()
    {
        $tab = ['nom'=> $this->nom];
        return $tab;
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

    
}