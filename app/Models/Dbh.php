<?php

namespace App\Models;

use PDO;

class Dbh
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'W6T3fp65SY';
    private $dbname = 'cryptocurrencies';

    public function connect()
    {
        try {
            $dsn = "mysql:server=$this->host ; dbname=$this->dbname";
            $pdo = new PDO ($dsn, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            echo utf8_encode("Échec de connexion : " . $e->getMessage() . "\n");
            die();
        }

        return $pdo;
    }
}
