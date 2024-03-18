<?php
namespace src\controllers;

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
        require_once './src/views/contact.php';
    }

    public function user()
    {

    }
}


?>