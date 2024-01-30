<?php
require_once "../../../ConnectDB.php";

class AddProduct extends ConnectDB
{
    private $imagep;
    private $titlep;
    private $descp;
    private $pricep;
    private $whoadds;


    public function __construct($imagep, $titlep, $descp, $pricep,$whoadds)
    {
        $this->imagep = $imagep;
        $this->titlep = $titlep;
        $this->descp = $descp;
        $this->pricep =  $pricep;
        $this->whoadds =  $whoadds;
    }
 
    public function insertProd()
{
    $conn = $this->connect();

    $uploadFolder = 'asetet/';

    if (!file_exists($uploadFolder) && !is_dir($uploadFolder)) {
        mkdir($uploadFolder);
    }

    $uploadPath = $uploadFolder . basename($this->imagep['name']);
    move_uploaded_file($this->imagep['tmp_name'], $uploadPath);

    $query = "INSERT INTO products (imagep, titlep, descp, pricep ,whoadd) VALUES (:image, :title, :description, :price,:whoadd)";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':image', $uploadPath, PDO::PARAM_STR);
    $stmt->bindParam(':title', $this->titlep, PDO::PARAM_STR);
    $stmt->bindParam(':description', $this->descp, PDO::PARAM_STR);
    $stmt->bindParam(':price', $this->pricep, PDO::PARAM_INT);
    $stmt->bindParam(':whoadd', $this->whoadds, PDO::PARAM_STR);
    
    $stmt->execute();
    $conn = null;
}
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $image = $_FILES['imagep']; 
    $title = $_POST['titlep']; 
    $description = $_POST['descp']; 
    $price = $_POST['pricep']; 
    $whoadd = $_POST['whoadd']; 

    $addProduct = new AddProduct($image, $title, $description, $price,$whoadd);
    $addProduct->insertProd();
    header("Location: ../Produktet/produktet.php");
}