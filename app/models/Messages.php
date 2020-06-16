<?php


namespace App\Models;


use Core\Model;

class Messages extends Model
{
    protected $_object;
    protected $_message;
    protected $_statut;
    protected $_activate;
    protected $_id_user;

    public function __construct()
    {
        $this->_table = 'messages';
    }

    public function getArrayFields()
    {
        $tab = [
            'object' => $this->_object,
            'message' => $this->_message,
            'read' => $this->_statut,
            'activate' => $this->_activate,
            'id_user' => $this->_id_user
        ];
        return $tab;
    }


    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->_object;
    }

    /**
     * @param mixed $object
     */
    public function setObject($object)
    {
        $this->_object = $object;
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

    public function getMessageById()
    {
        $sql = "SELECT * FROM users INNER JOIN messages on users.id = messages.id_user WHERE messages.id = :id";

        $dbh = self::getDb();

        return $dbh->query($sql, [':id' => $this->id])->fetch();
    }

}

