<?php 
namespace App\Controllers\Front;


use App\Controllers\Front\AppController;
use App\Models\User;

class IndexController extends AppController{

    

    public function __construct()
    {
       

        parent::__construct();
    

    }

    public function detailsAction(){

        $user = new  User();
        $user->setId(1);
        $res = $user->getNom();
        var_dump($res);
    }




    public function indexAction()
    {
   
        //Ici pour vous montrer je surcharge le title qui se trouve dans 
        // le constructeur parent
        $element['title'] = 'changement';
        $this->addContentToView($element);

        //Dans un tableau la variable "name" qui se trouve
        // dans la vue index de mon module "front"
        $tableauPourLaVue = ['name' => 'Mohamed',
                            'ville' => 'Ville : Douai'];
         
        $this->render('contenu.index', $tableauPourLaVue);
      
    }

    public function listeDetailAction()
    {

        //Ici pour vous montrer je surcharge le title qui se trouve dans
        // le constructeur parent
        $element['title'] = 'changement';
        $this->addContentToView($element);

        //Dans un tableau la variable "name" qui se trouve
        // dans la vue index de mon module "front"
        $tableauPourLaVue = ['name' => 'Mohamed',
            'ville' => 'Ville : Douai'];

        $this->render('contenu.listeDetail', $tableauPourLaVue);

    }

    public function connexionAction()
    {

        //Ici pour vous montrer je surcharge le title qui se trouve dans
        // le constructeur parent
        $element['title'] = 'changement';
        $this->addContentToView($element);

        //Dans un tableau la variable "name" qui se trouve
        // dans la vue index de mon module "front"
        $tableauPourLaVue = ['name' => 'Mohamed',
            'ville' => 'Ville : Douai'];

        $this->render('contenu.connexion', $tableauPourLaVue);

    }


    public function inscriptionAction()
    {

        //Ici pour vous montrer je surcharge le title qui se trouve dans
        // le constructeur parent
        $element['title'] = 'changement';
        $this->addContentToView($element);

        //Dans un tableau la variable "name" qui se trouve
        // dans la vue index de mon module "front"
        $tableauPourLaVue = ['name' => 'Mohamed',
            'ville' => 'Ville : Douai'];

        $this->render('contenu.inscription', $tableauPourLaVue);

    }
//    public function annonceDetailAction()
//    {
//
//        //Ici pour vous montrer je surcharge le title qui se trouve dans
//        // le constructeur parent
//        $element['title'] = 'changement';
//        $this->addContentToView($element);
//
//        //Dans un tableau la variable "name" qui se trouve
//        // dans la vue index de mon module "front"
//        $tableauPourLaVue = ['name' => 'Mohamed',
//            'ville' => 'Ville : Douai'];
//
//        $this->render('contenu.annonceDetail', $tableauPourLaVue);
//
//    }
    /**
     * Juste une methode pour tester
     * d'afficher la liste des utilisateur sur l'accueil
     */
    public function userlistAction()
    {
        echo 'test';
    }
}