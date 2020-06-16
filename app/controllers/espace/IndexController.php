<?php 


namespace App\Controllers\Espace;

use App\Controllers\Espace\AppController;

class IndexController extends AppController{

    public function __construct()
    {


        parent::__construct();


    }


    public function indexAction()
    {
        $tabPosts = ['name' => 'undeundeu'];
        
        $this->render('contents.index', $tabPosts);
    }
}