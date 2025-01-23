<?php

abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "sabrinaaitelhocine_crud_mvc";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $user = "sabrinaaitelhocine";
        $password = "42f72acb33228c477b94b94001bef4f6";

        $this->db = new PDO(
            $connexionString,
            $user,
            $password
        );
    }
}

?>