<?php
class Login extends ConnectDB
{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function validateLogin()
    {
        $query = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user || !password_verify($this->password, $user['passw'])) {
            throw new Exception("Emri i përdoruesit ose fjalkalimi janë te pasakt");
        }  
        header("Location: ../Honda Ks/Home/Home.php");
    }
}

