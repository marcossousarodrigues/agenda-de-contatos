<?php

namespace src\models;

class Connection
{
    static function connect()
    {
        $connPdo = new \PDO(DBDRIVE.':host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
        return $connPdo;
    }
}




?>