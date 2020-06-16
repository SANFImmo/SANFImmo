<?php


namespace App\Controllers\Admin;

use App\Controllers\Admin\AppController;
use App\Models\Property;
use App\Models\Address;
use App\Models\Category;
use App\Models\Image;

class PropertyController extends AppController
{

    public function indexAction()
    {
        $tabPosts = ['name' => 'undeundeu'];
        echo 'test';
        $this->render('index.index', $tabPosts);
    }

    public function testparamsAction($name)
    {

        echo '<h1>' . $name . '<h1>';
    }

    /**
     * Fonction qui affiche la liste des utilisateurs
     *
     * @return void
     */
    public function listAction()
    {
        $list = new Property;

        $results = $list->selectAll();

        $this->render('property.list',['results' => $results]);
    }

    public function edit_propertyAction()
    {

        if (isset($_POST['buttonEdit'])) {

            // $property->insert();


            $images = new Image();
            
            $adresse = new Address();

            $property = new Property();
            // $adresse->insert();


            $adresse->setNumero($_POST['numero']);
            $adresse->setRue($_POST['rue']);
            $adresse->setCp($_POST['cp']);
            $adresse->setVille($_POST['ville']);
            $adresse->setPays($_POST['pays']);

            $idAdress = $adresse->select();
            var_dump($idAdress);

            var_dump($idAdress);
            

            $property->setNom($_POST['nom_property']);
            $property->setType($_POST['type']);
            $property->setPrix($_POST['prix']);
            $property->setReference($_POST['reference']);
            $property->setSurface($_POST['surface']);
            $property->setDescription($_POST['description']);
            $property->setClasse_energetique($_POST['classEnergetique']);
            $property->setNbr_de_pieces($_POST['nbPieces']);
            $property->setNbr_de_chambre($_POST['nbChambres']);

            

            if (isset($_POST['activate']) && $property->setActivate($_POST['activate']) == 'off' ? 0 : 1);
            if (isset($_POST['top']) && $property->setTop($_POST['top']) == 'off' ? 0 : 1);
            if (isset($_POST['visible']) && $property->setVisible($_POST['visible']) == 'off' ? 0 : 1);
            
            
            // var_dump($_POST['categorie']);
            $property->setId_user(1);
            $property->setId_address($idAdress);
            $property->setId_category($_POST['categorie']);
            $idProperty = $property->insert();
            
            $images->setNom(md5(uniqid()));
            $images->setChemin('');
            $images->setId_property($idProperty);
            $images->insert();

            
            


        }


        $this->render('property.edit_property');

    
    }


    public function addAction()
    {

        if (isset($_POST['buttonAdd'])) {

            // $property->insert();


            $images = new Image();
            
            $adresse = new Address();

            $property = new Property();
            // $adresse->insert();


            $adresse->setNumero($_POST['numero']);
            $adresse->setRue($_POST['rue']);
            $adresse->setCp($_POST['cp']);
            $adresse->setVille($_POST['ville']);
            $adresse->setPays($_POST['pays']);

            $idAdress = $adresse->insert();

           


            $property->setNom($_POST['nom_property']);
            $property->setType($_POST['type']);
            $property->setPrix($_POST['prix']);
            $property->setReference($_POST['reference']);
            $property->setSurface($_POST['surface']);
            $property->setDescription($_POST['description']);
            $property->setClasse_energetique($_POST['classEnergetique']);
            $property->setNbr_de_pieces($_POST['nbPieces']);
            $property->setNbr_de_chambre($_POST['nbChambres']);

            

            if (isset($_POST['activate']) && $property->setActivate($_POST['activate']) == 'off' ? 0 : 1);
            if (isset($_POST['top']) && $property->setTop($_POST['top']) == 'off' ? 0 : 1);
            if (isset($_POST['visible']) && $property->setVisible($_POST['visible']) == 'off' ? 0 : 1);
            
            
            // var_dump($_POST['categorie']);
            $property->setId_user(1);
            $property->setId_address($idAdress);
            $property->setId_category($_POST['categorie']);
            $idProperty =  $property->insert();
            
            $images->setNom(md5(uniqid()));
            $images->setChemin('');
            $images->setId_property($idProperty);
            $images->insert();

            $this->uploadFiles();
            


        }


        $this->render('property.add');
    }


    public function uploadFiles(){
        $name = $_FILES['uploadFile1']['name'];
        $array= explode('.', $name);
        if (move_uploaded_file($_FILES['uploadFile1']['tmp_name'], 'img/'.uniqid(). '.' . $array[1])) {//1er : userfile correspond a l'input - 2e: la ou l'image est temporairement stocker - 3e: la ou je veux mettre mon fichier
            echo "Le fichier est valide, et a été téléchargé
avec succès. Voici plus d'informations :\n";
        } else {
            echo 'Une erreur s\'est produite';
        }

        if (move_uploaded_file($_FILES['uploadFile2']['tmp_name'], 'img/'.uniqid().'.' . $array[1])) {//1er : userfile correspond a l'input - 2e: la ou l'image est temporairement stocker - 3e: la ou je veux mettre mon fichier
            echo "Le fichier est valide, et a été téléchargé
avec succès. Voici plus d'informations :\n";
        } else {
            echo 'Une erreur s\'est produite';
        }

        if (move_uploaded_file($_FILES['uploadFile3']['tmp_name'], 'img/'.uniqid().'.' . $array[1])) {//1er : userfile correspond a l'input - 2e: la ou l'image est temporairement stocker - 3e: la ou je veux mettre mon fichier
            echo "Le fichier est valide, et a été téléchargé
avec succès. Voici plus d'informations :\n";
        } else {
            echo 'Une erreur s\'est produite';
        }

    }

    protected function render($view, $tab = [])
    {

        extract($this->varsView);
        extract($tab);

        ob_start();

        require_once $this->viewPath . '/' . str_replace('.', '/', $view) . '.php';
        $content = ob_get_clean();

        require_once $this->viewPath . '/' . $this->template . '.php';
    }
}
