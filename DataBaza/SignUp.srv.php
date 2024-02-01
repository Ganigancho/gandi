<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $passw = $_POST["passw"];

    try {
        require_once "./ConnectDB.php";
        require_once "./SignUp.php";
    } catch (PDOException $e) {
        die("Deshtim " . $e->getMessage());
    }

    try {
        $signup = new Signup($name, $username, $email, $passw);
        $signup->insertUsers();
        $signup->setUserRole('user');

        header("Location: ../Login/login.php");
        exit();
    } catch (Exception $e) {
        echo "Gabim gjatë regjistrimit: " . $e->getMessage();
    }
}
?>