<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["passw"];

    try {
        require_once "./ConnectDB.php";
        require_once "./Login.php";
    } catch (PDOException $e) {
        die("Lidhja deshtio " . $e->getMessage());
    }

    try {
        $login = new Login($username, $password);
        $login->validateLogin();
    } catch (Exception $e) {
        echo "Problem gjatë logimit: " . $e->getMessage();
    }
}
?>
