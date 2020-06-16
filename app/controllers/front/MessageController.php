<?php


namespace App\Controllers\Front;

use App\Controllers\Front\AppController;
use App\Models\User;
use App\Models\Message;
class MessageController
{
    public function contactAction(){
        $message = new Message();
        $user = new User();
        $message->select($user);

        if(isset($_POST['envoyer'])){

//            $message->setName($_POST['name']);
//            $message->setFirstName($_POST['firstName']);
//            $message->setEmail($_POST['email']);
//            $message->setIdUser($_POST['id_user']);
//            var_dump($message);




            $message->setObjet($_POST['objet']);
            $message->setMessage($_POST['message']);


        }


       //$this->render('contenu.contact');
    }

}