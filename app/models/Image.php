<?php 

namespace App\Models;

use Core\Model;

class Image extends Model
{
     

    protected $nom;
    protected $chemin;
    protected $activate;
    protected $id_property;

    public function __construct()
    {
        $this->_table = 'images';
    }




    public function getArrayFields()
    {
        $tab = [
            'nom' => $this->nom,
            'chemin' => $this->chemin,
            'activate' => $this->activate,
            'id_property' => $this->id_property        
        ];

        return $tab;
    }
    

 

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
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
     * Get the value of chemin
     */ 
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * Set the value of chemin
     *
     * @return  self
     */ 
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get the value of activate
     */ 
    public function getActivate()
    {
        return $this->activate;
    }

    /**
     * Set the value of activate
     *
     * @return  self
     */ 
    public function setActivate($activate)
    {
        $this->activate = $activate;

        return $this;
    }

    /**
     * Get the value of id_property
     */ 
    public function getId_property()
    {
        return $this->id_property;
    }

    /**
     * Set the value of id_property
     *
     * @return  self
     */ 
    public function setId_property($id_property)
    {
        $this->id_property = $id_property;

        return $this;
    }
}