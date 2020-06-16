<?php


namespace App\Controllers\Espace;

use App\Controllers\Espace\AppController;
use App\Models\User;
use App\Models\Messages;

class ContactController extends AppController
{
    public function indexAction()
    {
        $message = new Messages();
        $user = new User();
        //$message->select($user);

//        $message->setName($_POST['name']);
//        $message->setFirstName($_POST['firstName']);
//        $message->setEmail($_POST['email']);
//        $message->setIdUser($_POST['id_user']);
//        var_dump($message);


        if (isset($_POST['envoyer'])) {

            $message->setObject($_POST['objet']);
            $message->setMessage($_POST['message']);
            $message->setIdUser(1);

            if (isset($_POST['activate']) && $message->setActivate($_POST['activate']) == 'off' ? 0 : 1) ;
            if (isset($_POST['read']) && $message->setStatut($_POST['read']) == 'off' ? 0 : 1) ;

            $message->insert();
        }

        $this->render('contents.contact');

    }

}