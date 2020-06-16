<?php


namespace App\Controllers\Espace;

use App\Controllers\Espace\AppController;
use App\Models\User;
use App\Models\Property;
use App\Models\Image;
use App\Models\Favoris;

class FavorisController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }


    public function indexAction()
    {
        $favoris = new Favoris();


        $sql = "SELECT images.nom as imgName ,properties.nom,prix,reference FROM properties INNER JOIN wishlist on properties.id = wishlist.id_property
INNER JOIN images on properties.id = images.id_property";
        $stmt = $favoris->getDB()->query($sql);
        $liste = $stmt->fetchAll();

        $this->render('contents.favoris', ['liste' => $liste]);
    }





}