<?php
require_once '../../../ConnectDB.php';
include('../../../ConfigSession.php');

if (!isset($_SESSION["user_id"])) {
  header("Location: ../../../../Login/login.php");
  exit(); 
}

class DeleteIdProd extends ConnectDB
{
    public function deleteId()
    {
        if (isset($_GET['deleteid'])) {
            $id = $_GET['deleteid'];
            // echo "Eshte Fshire useri me ID: $id";
            $query = "DELETE FROM productss WHERE id = :id";
            $stmt = $this->connect()->prepare($query);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
        }
    }
}

$deleteId = new DeleteIdProd();
$deleteId->deleteId();

header("Location: ../../../../Honda Ks/pages/Produktet/Produktet.php");

exit();

?>

