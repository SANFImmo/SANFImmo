<?php


namespace App\controllers\front;

use Core\Model;

class ApiController extends AppController
{

    public function propertiesAction()
    {
        if($_SERVER['PHP_AUTH_USER']=='toto' && $_SERVER['PHP_AUTH_PW']=='toto'){
        header('Content_Type: application/json');
        var_dump($_POST);

        $sql = "SELECT properties.id as properId,categories.nom as cateName,users.nom as userName,properties.nom as properName,prix,reference,surface,description,classe_energetique,nbr_de_pieces,nbr_de_chambre,type,address.id as addId,numero,rue,cp,ville,pays FROM properties
 INNER JOIN address on properties.id_address = address.id
  INNER JOIN categories on properties.id_category = categories.id 
  INNER JOIN users on properties.id_user = users.id";
        $stmt = Model::getDB()->query($sql);
        $list = $stmt->fetchAll();
        echo json_encode($list);
        $uri = $_SERVER['REQUEST_METHOD'];  // pour savoir quel est le verbe (la methode)
        var_dump($uri);
        }
    }


    public function propertyAction($id){

        header('Content_Type: application/json');
        $sql = "SELECT properties.id as properId,categories.nom as cateName,users.nom as userName,properties.nom as properName,prix,reference,surface,description,classe_energetique,nbr_de_pieces,nbr_de_chambre,type,address.id as addId,numero,rue,cp,ville,pays FROM properties
 INNER JOIN address on properties.id_address = address.id
  INNER JOIN categories on properties.id_category = categories.id 
  INNER JOIN users on properties.id_user = users.id WHERE properties.id=:id";
        $stmt = Model::getDB()->query($sql,['id' => $id]);
        $list = $stmt->fetch();
        echo json_encode($list);
//        $uri = $_SERVER['REQUEST_METHOD'];
//        var_dump($uri);

    }
}