<?php

namespace src\models;
use src\models\Connection;
class Contact
{
    private static $table = 'tb_contact';

    static function insert($contact)
    {
        $conn = Connection::connect();
        
        $sql = "INSERT INTO ".self::$table." (name, surname, tel, email) VALUES(:name, :surname, :tel, :email)";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':name',       $contact["name"]);
        $stmt->bindValue(':surname',    $contact["surname"]);
        $stmt->bindValue(':tel',        $contact["tel"]);
        $stmt->bindValue(':email',      $contact["email"]);

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

    public static function selectAll()
    {
        $conn = Connection::connect();

        $sql = "SELECT * FROM ".self::$table;

        $stmt = $conn->prepare($sql);

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

}

?>