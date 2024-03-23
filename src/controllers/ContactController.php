<?php
namespace src\controllers;
use src\models\Contact;
use src\middlewares\AuthUserMiddleware;


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
        $UserId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : "" ;

        $contact = [
            "name" => $name,
            "surname" => $surname,
            "tel" => $tel,
            "email" => $email,
            "UserId" => $UserId
        ];

        $getMessage = Contact::insert($contact);

        var_dump($getMessage);

        header("location: ".baseUrl."pages/contactlist");

    }

    public static function update($id = null)
    {
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $surmane = isset($_POST['surname']) ? $_POST['surname'] : "";
        $tel = isset($_POST['tel']) ? $_POST['tel'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";


        $contact = ["name" => $name, "surname" => $surmane, "tel" => $tel, "email" => $email, "id"=>$id];

        Contact::update($contact);

    }

    public static function delete($id = null)
    {    
        Contact::delete($id);
        header('Location: '.baseUrl.'/pages/contactlist');
    }

    public static function read()
    {
        return Contact::selectAll();
    }

    public static function readById($id)
    {
        return Contact::selectById($id);
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

