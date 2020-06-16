<?php


namespace App\Models;


use Core\Model;

class Favoris extends Model
{
    protected $_activate;
    protected $_id_user;
    protected $_date_add;
    protected $_id_property;


    public function __construct()
    {
        $this->_table = 'wishlist';
    }


    public function getArrayFields()
    {
        $tab = [
            'id_property' => $this->_id_property,
            'activate' => $this->_activate,
            'id_user' => $this->_id_user
        ];
        return $tab;
    }

    /**
     * @return mixed
     */
    public function getDateAdd()
    {
        return $this->_date_add;
    }

    /**
     * @param mixed $date_add
     */
    public function setDateAdd($date_add)
    {
        $this->_date_add = $date_add;
    }



    /**
     * @return mixed
     */
    public function getIdProperty()
    {
        return $this->_id_property;
    }


    /**
     * @param mixed $id_property
     */
    public function setIdProperty($id_property)
    {
        $this->_id_property = $id_property;
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




}