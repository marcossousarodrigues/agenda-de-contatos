<?php
namespace src\controllers;

class ContactController{

    private $name;
    private $surname;
    private $tel;
    private $email;
    private $address;

    public function __construct()
    {
        
    }

    
    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function read()
    {

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

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }


}



?>

