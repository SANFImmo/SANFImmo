<?php


namespace App\Models;


use Core\Model;

class Message extends Model
{

    protected $_objet;
    protected $_message;
    protected $_statut;
    protected $_activate;
    protected $_name;
    protected $_firstName;
    protected $_email;
    protected $_id_user;

public function __construct()
{
    $this->_table ='message';
}

    public function getArrayFields()
    {
        $tab = [
            'objet' => $this->_objet,
            'message' => $this->_message,
            'read' => $this->_statut,
            'activate' => $this->_activate,
            'name' => $this->_name,
            'firstName' => $this->_firstName,
            'email' => $this->_email,
            'id-user'=> $this->_id_user
        ];
        return $tab;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }



    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->_firstName;
    }


    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
    }


    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }


    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }


    /**
     * @return mixed
     */
    public function getObjet()
    {
        return $this->_objet;
    }

    /**
     * @param mixed $objet
     */
    public function setObjet($objet)
    {
        $this->_objet = $objet;
    }


    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->_message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->_message = $message;
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
    public function setActivate($activate)
    {
        $this->_activate = $activate;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->_statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->_statut = $statut;
    }


    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->_id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->_id_user = $id_user;
    }



}

