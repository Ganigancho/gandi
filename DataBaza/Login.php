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
        $user = $this->getUserFromDatabase();

        
        if (!$user || !password_verify($this->password, $user['passw'])) {
            throw new Exception("Emri i përdoruesit ose fjalkalimi janë te pasakt");
        }

        $this->updateLastLogin($user['id']);

        session_start();
        $_SESSION['name'] = $user['name'];
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_role'] = $user['role'];

        header("Location: ../Honda Ks/Home/Home.php");
    }
    private function getUserFromDatabase()
    {
        $query = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    private function updateLastLogin($userId)
    {
        $query = "INSERT INTO lastlogin (user_id, last_login_device, user_role,user_name) VALUES (:user_id, :last_login_device, :user_role,:user_name)";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":user_id", $userId);
        $stmt->bindParam(":last_login_device", $_SERVER['HTTP_USER_AGENT']);
        $stmt->bindParam(":user_role", $this->getUserDataFromDatabase($this->username)['role']);
        $stmt->bindParam(":user_name", $this->getUserDataFromDatabase($this->username)['name']);
        $stmt->execute();
    }
    private function getUserDataFromDatabase($username)
    {
        $query = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

