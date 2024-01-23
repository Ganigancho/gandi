<?php
require_once "ConnectDB.php";

class Signup extends ConnectDB
{
    private $name;
    private $username;
    private $email;
    private $passw;

    public function __construct($name, $username, $email, $passw)
    {
        $pwdSignup = $passw;

        $options = [
            'cost' => 12
        ];

        $hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->passw =  $hashedPwd;
    }

    public function insertUsers()
    {

        $query = "INSERT INTO users (name, username, email, passw) VALUES (:name, :username, :email, :passw)";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":passw", $this->passw);
        $stmt->execute();
    }
}
