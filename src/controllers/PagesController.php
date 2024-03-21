<?php
namespace src\controllers;
use src\controllers\ContactController;
class PagesController
{

    public function index()
    {
        require_once './src/views/home.php';
    }
    
    public function home()
    {
        require_once './src/views/home.php';
    }

    public function contact()
    {
        require_once './src/views/createContact.php';
    }

    public function contactList()
    {   
        $contacts = ContactController::read();

        require_once './src/views/listContact.php';
    }

    public function user()
    {

    }
}


?>