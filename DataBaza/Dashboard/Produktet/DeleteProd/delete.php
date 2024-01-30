<?php
require_once '../../../ConnectDB.php';

class DeleteIdProd extends ConnectDB
{
    public function deleteId()
    {
        if (isset($_GET['deleteid'])) {
            $id = $_GET['deleteid'];
            // echo "Eshte Fshire useri me ID: $id";
            $query = "DELETE FROM products WHERE id = :id";
            $stmt = $this->connect()->prepare($query);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
        }
    }
}

$deleteId = new DeleteIdProd();
$deleteId->deleteId();

header("Location: ../Produktet/produktet.php");

exit();
