<?php

class ConnectDB
{

    private $server = "localhost";
    private $dbname = "databazagandi";
    private $dbusername = "root";
    private $dbpassword = "";

    protected function connect()
    {
        try {
            $pdo = new PDO("mysql:host=" . $this->server . ";dbname=" . $this->dbname, $this->dbusername, $this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Lidhja me databazë deshtoi: " . $e->getMessage());
        }
    }
}
