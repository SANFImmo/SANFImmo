<?php 

namespace Core;

use Core\Db;

class Model
{
    protected $_table;

    protected static $_db;

    protected $id;

    public function insert($fields) {
         
    }

    public function select($content)
    {
      $dbh = self::getDb();
      return $dbh->select($content, $this->_table, [':id'=>$this->id])->fetch();

    }

    public static function find($params = []) {
       
        
      }

    public function update($fields) {
      
      }

    public function delete()
    {

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