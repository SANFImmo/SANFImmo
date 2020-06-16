<?php 


namespace App\Controllers\Admin;

use App\Controllers\Admin\AppController;
use App\Models\User;

class UserController extends AppController{

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
    public function fionaAction() {
        echo 'Test Fiona';
        $this->render('index.fiona');
    }

    /**
     * Fonction qui affiche la liste des utilisateurs
     *
     * @return void
     */
    public function listAction()
    {
        $tabPosts = ['name' => 'undeundeu'];
        
       
        $this->render('user.list');
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