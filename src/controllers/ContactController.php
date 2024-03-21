<?php
namespace src\controllers;
use src\models\Contact;
class ContactController{

    private $name;
    private $surname;
    private $tel;
    private $email;
    private $address;

    public function __construct()
    {   

    }

    
    public static function create()
    {
        
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $surname = isset($_POST['surname']) ? $_POST['surname'] : "";
        $tel = isset($_POST['tel']) ? $_POST['tel'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        
        $contact = [
            "name" => $name,
            "surname" => $surname,
            "tel" => $tel,
            "email" => $email
        ];

        $getMessage = Contact::insert($contact);

        header("location: ".baseUrl."pages/contactlist");

    }

    public static function update()
    {

    }

    public static function delete()
    {

    }

    public static function read()
    {
        return Contact::selectAll();
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

