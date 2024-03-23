<?php
namespace src\controllers;
use src\models\User;

class UserController{

    private $name;
    private $surname;
    private $email;
    private $password;

    public function __construct()
    {
        
    }

    public function login()
    {

        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";

        if(empty($email) && empty($password))
        {
           header("location: ".baseUrl."pages/login");
           return;
        }

        $user = [
            "email" => $email,
            "password" => $password
        ];

        $userExist = User::selectByEmail($user["email"]);

        if(!empty($userExist))
        {
            if($user["password"] === $userExist["password"])
            {
                $this->authUser($userExist);
            }
            else
            {
               return header("location: ".baseUrl."pages/login?message-error=Usuário Não Autenticado!");
            }
        }   
        else
        {
            header("location: ".baseUrl."pages/login?message-error=Usuário Não Autenticado!");
        }


    }

    public function register()
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $confirmpassword = filter_input(INPUT_POST, 'confirmpassword', FILTER_SANITIZE_SPECIAL_CHARS);

        $user = [
            "name" => $name,
            "surname" => $surname,
            "email" => $email,
            "password" => $password,
            "confirmpassword" => $confirmpassword
        ];

        $emailExist = User::selectByEmail($user["email"]);

        if(!empty($emailExist))
        {
            header("location: ".baseUrl."pages/register?message-error=Email ja cadastrado");
        }
        else
        {
            $ret = User::insert($user);

            if($ret["success"])
            {
                $emailExist = User::selectByEmail($user["email"]);
                $this->authUser($emailExist);
            }
            else
            {
                header("location: ".baseUrl."pages/register?message-error=".$ret["message"]."");
            }   
           
        }
      

        
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

    public static function readByEmail($email)
    {
        return User::selectByEmail($email);
    }

    public function authUser($user)
    {
        $_SESSION['auth_user']  = true;
        $_SESSION['user_name']  = $user['name'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_id']   = $user['id'];

        header("location: ".baseUrl."pages/contactlist");
    }


    public function destroy()
    {   
        // Destroi a sessão
        session_destroy();

        // Redireciona para outra página, se necessário
        header("Location:". baseUrl);
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