<?php

namespace App\Models;

use Core\Model;

class User extends Model
{


    protected $_nom;
    protected $_prenom;
    protected $_telephone;
    protected $_mail;
    protected $_password;
    protected $_naissance;
    protected $_activate;
    protected $_id_address;
    private $_errors = [];


    public function __construct()
    {
        $this->_table = 'users';
    }

    public function getArrayFields()
    {
        $tab = [
            'nom' => $this->_nom,
            'prenom' => $this->_prenom,
            'telephone' => $this->_telephone,
            'mail' => $this->_mail,
            'password' => $this->_password,
            'naissance'=> $this->_naissance,
            'activate' => $this->_activate,
            'id_address'=>$this->_id_address
        ];
        return $tab;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($_nom)
    {
        if (preg_match('/[a-zA-Z]{2,255}/', $_nom)) {

            $this->_nom = $_nom;
        } else {
            $this->_errors[] = 'Nom incorrecte';
        }

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($_prenom)
    {
        if (preg_match('/^[A-Z][\p{L}-]*$/', $_prenom)) {
            $this->_prenom = $_prenom;
        } else {
            $this->_errors[] = 'Prénom invalide';
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {


        return $this->_telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($_telephone)
    {
        if (preg_match('/(\d{2}.){4}(\d{2})$/', $_telephone)) {
            $this->_telephone = $_telephone;
        } else {
            $this->_errors[] = 'Téléphone invalide';
        }
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->_mail;
    }

    /**
     * @param mixed $Mail
     */
    public function setMail($_mail)
    {
        if (preg_match('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/', $_mail)) {
            $this->_mail = $_mail;
        } else {
            $this->_errors[] = 'E-mail invalide';
        }

    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $_password
     */
    public function setPassword($_password)
    {
        if (preg_match('/.{8,255}/', $_password)) {

            $this->_password = $_password;
        } else {
            $this->_errors[] = 'Mode de passe invalide';
        }

    }

    /**
     * @return mixed
     */
    public function getNaissance()
    {
        return $this->_naissance;
    }

    /**
     * @param mixed $_naissance
     */
    public function setNaissance($_naissance)
    {
        if (preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $_naissance)) {

            $this->_naissance = $_naissance;
        } else {
            $this->_errors[] = 'Date de naissance invalide';
        }

    }


    /**
     * @return mixed
     */
    public function getActivate()
    {
        return $this->_activate;
    }

    /**
     * @param mixed $activate
     */
    public function setActivate($_activate)
    {
        $this->_activate = $_activate;
    }


    /**
     * @return mixed
     */
    public function getIdAddress()
    {
        return $this->_id_address;
    }

    /**
     * @param mixed $id_address
     */
    public function setIdAddress($id_address)
    {
        $this->_id_address = $id_address;
    }
}