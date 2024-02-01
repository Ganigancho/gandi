<?php
require_once '../../../ConnectDB.php';

class DeleteId extends ConnectDB
{
    public function deleteId()
    {
        if (isset($_GET['deleteid'])) {
            $id = $_GET['deleteid'];
            $query = "DELETE FROM users WHERE id = :id";
            $stmt = $this->connect()->prepare($query);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
        }
    }
}

$deleteId = new DeleteId();
$deleteId->deleteId();

header("Location: ../Users/UsersList.php");

exit();