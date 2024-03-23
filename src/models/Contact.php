<?php

namespace src\models;

use Exception;
use src\models\Connection;
class Contact
{
    private static $table = 'tb_contact';

    static function insert($contact)
    {
        $conn = Connection::connect();
        
        $sql = "INSERT INTO ".self::$table." (name, surname, tel, email, UserId) VALUES(:name, :surname, :tel, :email, :UserId)";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':name',       $contact["name"]);
        $stmt->bindValue(':surname',    $contact["surname"]);
        $stmt->bindValue(':tel',        $contact["tel"]);
        $stmt->bindValue(':email',      $contact["email"]);
        $stmt->bindValue(':UserId',     $contact["UserId"]);

        try
        {
            $stmt->execute();
            return ["message" => "Contato salvo com sucesso"];
        }
        catch(\Exception $e)
        {
            return ["message" => "Erro ao tentar inserir o contato".$e->getMessage()];
        }
    }

    public static function update($contact)
    {
        $conn = Connection::connect();
    
        $sql = "UPDATE ".self::$table. " SET name = :name, surname = :surname, tel = :tel, email = :email"
        ." WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(":name", $contact['name']);
        $stmt->bindValue(":surname", $contact['surname']);
        $stmt->bindValue(":tel", $contact['tel']);
        $stmt->bindValue(":email", $contact['email']);
        $stmt->bindValue(":id", $contact['id']);

        try
        {
            $stmt->execute();

            header('Location: '.baseUrl.'pages/contactlist');

            return ["message" => "Atualização realizada com sucesso"];
        }
        catch(Exception $e)
        {
            return ["message" => "Error ao tentar a atualizar".$e->getMessage()];
        }
       

    }

    public static function selectAll()
    {
        $conn = Connection::connect();
        $UserId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : "";

        $sql = "SELECT * FROM ".self::$table. " WHERE UserId = :UserId";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":UserId",$UserId);

        try
        {
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        catch(\Exception $e)
        {
            return ["listContact" => "Erro ao selecionar os contatos".$e->getMessage()];
        }
    
    }

    public static function selectById($id)
    {
        $conn = Connection::connect();

        $sql = "SELECT * FROM ".self::$table. " WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":id", $id);

        try
        {
            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }
        catch(\Exception $e)
        {
            return ["listContact" => "Erro ao selecionar os contatos".$e->getMessage()];
        }
       


    }

    public static function delete($id)
    {   
        $conn = Connection::connect();
        $sql = "DELETE FROM ".self::$table." WHERE id = :id";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":id", $id);

        $stmt->execute();

    }

}

?>