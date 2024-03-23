<?php
namespace src\controllers;
use src\controllers\ContactController;
use src\middlewares\AuthUserMiddleware;


class PagesController
{
    private $auth;

    public function __construct()
    {
       $this->auth = AuthUserMiddleware::authUser();
    }

    public function index()
    {
        if($this->auth)
        {
            $contacts = ContactController::read();
            require_once './src/views/contact/listContact.php';
            header("Location:".baseUrl."pages/contactlist");
        }
        else
        {
            require_once './src/views/home.php';
        }
        
    }
    
    public function login()
    {
        if(!$this->auth)
        {
            require './src/views/user/login.php';
        }
        else
        {
            $contacts = ContactController::read();
            require_once './src/views/contact/listContact.php';
            header("Location:".baseUrl."pages/contactlist");
        }
        
    }

    public function register()
    {
        require_once './src/views/user/register.php';
    }

    public function user()
    {
        
        if($this->auth )
        {
            require_once './src/views/user/dashboard.php';
        }
        else
        {
            require_once './src/views/user/login.php';
            header("Location:".baseUrl."pages/login");
        }
    }

    public function contact()
    {
        if($this->auth )
        {
            require_once './src/views/contact/createContact.php';
        }
        else
        {
            require_once './src/views/user/login.php';
            header("Location:".baseUrl."pages/login");
        }
    }

    public function editContact($id)
    {   
        if($this->auth)
        {
            $contact = ContactController::readById($id);
            require_once './src/views/contact/editarContact.php';
        }
        else
        {
            require_once './src/views/user/login.php';
            header("Location:".baseUrl."pages/login");
        }
    }


    public function contactList()
    {   
        if($this->auth)
        {
            $contacts = ContactController::read();
            require_once './src/views/contact/listContact.php';
        }
        else
        {
            require_once './src/views/user/login.php';
            header("Location:".baseUrl."pages/login");
        }
    }
}


?>