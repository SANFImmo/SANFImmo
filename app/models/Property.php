<?php

namespace App\Models;

use Core\Model;

class Property extends Model
{


    protected $nom;
    protected $prix;
    protected $reference;
    protected $surface;
    protected $description;
    protected $classe_energetique;
    protected $nbr_de_pieces;
    protected $nbr_de_chambre;
    protected $type;
    protected $top;
    protected $activate;
    protected $visible;
    protected $id_category;
    protected $id_user;
    protected $id_address;
    protected $id_images;

    public function __construct()
    {
        $this->_table = 'properties';
    }




    public function getArrayFields()
    {
        $tab = [
            'nom' => $this->nom,
            'type' => $this->type,
            'prix' => $this->prix,
            'reference' => $this->reference,
            'surface' => $this->surface,
            'description' => $this->description,
            'classe_energetique' => $this->classe_energetique,
            'nbr_de_pieces' => $this->nbr_de_pieces,
            'nbr_de_chambre' => $this->nbr_de_chambre,
            'top' => $this->top,
            'activate' => $this->activate,
            'visible' => $this->visible,
            'id_category' => $this->id_category,
            'id_user' => $this->id_user,
            'id_address' => $this->id_address
        ];

        return $tab;
    }

    /**
     * Get the value of nom_property
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom_property
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of surface
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set the value of surface
     *
     * @return  self
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of classe_energetique
     */
    public function getClasse_energetique()
    {
        return $this->classe_energetique;
    }

    /**
     * Set the value of classe_energetique
     *
     * @return  self
     */
    public function setClasse_energetique($classe_energetique)
    {
        $this->classe_energetique = $classe_energetique;

        return $this;
    }

    /**
     * Get the value of nbr_de_pieces
     */
    public function getNbr_de_pieces()
    {
        return $this->nbr_de_pieces;
    }

    /**
     * Set the value of nbr_de_pieces
     *
     * @return  self
     */
    public function setNbr_de_pieces($nbr_de_pieces)
    {
        $this->nbr_de_pieces = $nbr_de_pieces;

        return $this;
    }

    /**
     * Get the value of nbr_de_chambre
     */
    public function getNbr_de_chambre()
    {
        return $this->nbr_de_chambre;
    }

    /**
     * Set the value of nbr_de_chambre
     *
     * @return  self
     */
    public function setNbr_de_chambre($nbr_de_chambre)
    {
        $this->nbr_de_chambre = $nbr_de_chambre;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of top
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * Set the value of top
     *
     * @return  self
     */
    public function setTop($top)
    {
        $this->top = $top;

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
     * Get the value of visible
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set the value of visible
     *
     * @return  self
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get the value of id_category
     */ 
    public function getId_category()
    {
        return $this->id_category;
    }

    /**
     * Set the value of id_category
     *
     * @return  self
     */ 
    public function setId_category($id_category)
    {
        $this->id_category = $id_category;

        return $this;
    }

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of id_address
     */ 
    public function getId_address()
    {
        return $this->id_address;
    }

    /**
     * Set the value of id_address
     *
     * @return  self
     */ 
    public function setId_address($id_address)
    {
        $this->id_address = $id_address;

        return $this;
    }

    /**
     * Get the value of id_images
     */ 
    public function getId_images()
    {
        return $this->id_images;
    }

    /**
     * Set the value of id_images
     *
     * @return  self
     */ 
    public function setId_images($id_images)
    {
        $this->id_images = $id_images;

        return $this;
    }



}
