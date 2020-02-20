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
        $user->setId(2);
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
        $tableauPourLaVue = ['name' => 'Delchambre',
                            'ville' => 'Ville : Annoeullin'];
         
        $this->render('index.index', $tableauPourLaVue);
      
    }
    /**
     * Juste une methode pour tester
     * d'afficher la liste des utilisateur sur l'accueil
     */
    public function userlistAction()
    {
        echo 'test';
    }
}