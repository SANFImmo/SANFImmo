<?php


namespace App\Controllers\Admin;


use App\Models\User;
use App\Models\Messages;

class MessageController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }


    public function listeAction()
    {
        $message = new Messages();

        $sql = "SELECT messages.id,users.nom,object,message,`read` FROM users INNER JOIN messages on users.id = messages.id_user";
        $stmt = $message->getDB()->query($sql);
        $liste = $stmt->fetchAll();

        $this->render('message.listeMessage', ['liste' => $liste]);
    }


    public function detailAction($id)
    {
        $message = new Messages();
        $message->setId($id);
        $detail = $message->getMessageById();
        $this->render('message.detailMessage', ['detail' => $detail]);
    }

}