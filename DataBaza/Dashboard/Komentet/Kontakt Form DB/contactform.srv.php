<?php 
require_once "../../../ConnectDB.php";

class GetComment extends ConnectDB
{
    private $name;
    private $surname;
    private $email;
    private $coment;

    public function __construct($name,$surname,$email,$coment)
    {
        $this-> name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->coment = $coment;
    }
    public function insertComment()
    {
        $query = "INSERT INTO contact_form (name, surname, email, coment) VALUES (:name, :surname, :email, :coment)";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":surname", $this->surname);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":coment", $this->coment);
        $stmt->execute();
    }
}
if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $coment = $_POST["coment"];

try {
    require_once "../../../ConnectDB.php";
} catch (PDOException $e) {
    die("Deshtim " . $e->getMessage());
}

try {
    $getcc = new GetComment($name, $surname, $email, $coment);
    $getcc->insertComment();

    header("Location: ../../../../Honda Ks/pages/Kontaktoni/ContactForm.php");
    exit();
} catch (Exception $e) {
    echo "Gabim gjatë Kontakt Formës: " . $e->getMessage();
}
}