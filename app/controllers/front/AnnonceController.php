<?php


namespace App\controllers\front;


use Core\Model;

class AnnonceController extends AppController
{

    public function indexAction($id = 2)
    {



        $sql = "SELECT properties.nom,categories.nom as cateName,prix,reference,surface,description,classe_energetique,nbr_de_pieces,nbr_de_chambre,type FROM properties
INNER JOIN address on properties.id_address = address.id
INNER JOIN images on properties.id = images.id_property 
INNER JOIN categories on properties.id_category = categories.id WHERE id_property = :id";
        $stmt = Model::getDB()->query($sql, ['id' => $id]);
        $detail = $stmt->fetch();

        $sql1 = "SELECT images.nom as imgName FROM images
INNER JOIN properties on images.id_property = properties.id WHERE id_property = :id";
        $stmt1 = Model::getDB()->query($sql1, ['id' => $id]);
        $detail1 = $stmt1->fetchAll();





        $this->render('contenu.annonceDetail', ['detail' => $detail, 'detail1' => $detail1]);
var_dump($detail1[0]);
    }


}