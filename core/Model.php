<?php 

namespace Core;

use Core\Db;

abstract class Model
{
    protected $_table;

    protected static $_db;

    protected $id;

    abstract public function getArrayFields();

    public function insert() {
        $dbh = self::getDb();//Retourne la connexion
        $fields = $this->getArrayFields();
        $dbh->insert($this->_table, $fields);//On insère dans la table le tableau de valeur.
        return $dbh->getlastInsertId();
    }

    public function update() {
        $dbh = self::getDb();//Retourne la connexion
        $fields = $this->getArrayFields();
        $where = ['id' => $this->id];
        $dbh->update($this->_table, $fields, $where);
    }

    public function select($content)
    {
        $dbh = self::getDb();
        return $dbh->select($content, $this->_table, [':id'=>$this->id])->fetch();
    }

    public function selectAll()
    {
        $dbh = self::getDb();
        return $dbh->select('*', $this->_table)->fetchAll();
    }

    public function delete()
    {
        $dbh = self::getDb();
        $where = ['id' => $this->id];
        $dbh->delete($this->_table, $where);
    }

    public static function find($params = []) {


    }

    public static function getDb(){
        if(!self::$_db) {
            self::$_db = Db::getInstance();
        }
        return self::$_db;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}