<?php
namespace src\controllers;

class UserController{
    private $name;
    private $surname;
    private $email;
    private $password;

    public function __construct()
    {
        
    }

    public function index()
    {
        echo "index";
    }

    public function create()
    {
        echo "create";
    }

    public function update()
    {
        echo "update";
    }

    public function delete()
    {
        echo "delete";
    }

    public function read()
    {
        echo "read";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }


}



?>