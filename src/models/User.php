<?php
namespace src\models;

use Exception;

class User
{
    private static $table = "tb_user";

    public static function insert($user)
    {
        $conn = Connection::connect();

        $sql = " INSERT INTO " . self::$table. " (name, surname, email, password) VALUES (:name, :surname, :email, :password)";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name", $user['name']);
        $stmt->bindValue(":surname", $user['surname']);
        $stmt->bindValue(":email", $user['email']);
        $stmt->bindValue(":password", $user['password']);

        try
        {
            $stmt->execute();
            return [
                "message" => "Cadastro realizado com sucesso",
                "success" => true,
                "error" => false
            ];
        }
        catch(Exception $e)
        {
            return [
                "message" => "Ocorreram erros".$e->getMessage(),
                "success" => false,
                "error" => true
            ];
        }
        

    }   

    public static function selectByEmail($email)
    {
        $conn = Connection::connect();
        $sql = "SELECT * FROM ".self::$table. " WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":email", $email);

        try
        {
            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }
        catch(Exception $e)
        {
            return ["message" => "ocorreram erros". $e->getMessage()];
        }
       


    }
}


?>