<?php
require_once '../../../ConnectDB.php';

class UpdateProd extends ConnectDB
{
    public function updateProd()
    {
        $id = $_GET['updateprod'];
    
        if (isset($_POST['SUBMIT'])) {
            $imagep = $_FILES['imagep'];
            $titlep = $_POST['titlep'];
            $descp = $_POST['descp'];
            $pricep = $_POST['pricep'];
            $uploadFolder = 'asetet/';
            
            
            if (!file_exists($uploadFolder) && !is_dir($uploadFolder)) {
                mkdir($uploadFolder);
            }
            
            if (!empty($imagep['name'])) {
                $path_parts = pathinfo($imagep['name']);
                $filename = $path_parts['filename'];
                $extension = $path_parts['extension'];
    
                $uploadPath = $uploadFolder . $filename . '.' . $extension;
                move_uploaded_file($imagep['tmp_name'], $uploadPath);
            } elseif (isset($_POST['existing_image'])) {
                $uploadPath = $_POST['existing_image'];
            } else {
                $uploadPath = ''; 
            }
    
            $query = "UPDATE products SET imagep = :imagep, titlep = :titlep, descp = :descp, pricep = :pricep, create_at = NOW() WHERE id = :id";
            $stmt = $this->connect()->prepare($query);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":imagep", $uploadPath, PDO::PARAM_STR);
            $stmt->bindParam(":titlep", $titlep, PDO::PARAM_STR);
            $stmt->bindParam(":descp", $descp, PDO::PARAM_STR);
            $stmt->bindParam(":pricep", $pricep, PDO::PARAM_STR);
    
            try {
                $stmt->execute();
                header("Location: ../../../../Honda Ks/pages/Produktet/Produktet.php");
            } catch (PDOException $e) {
                echo "Problem: " . $e->getMessage();
            }
            exit();
        }
    }

    public function getLastProd($id)
    {
        $query = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Problem: " . $e->getMessage();
            return false;
        }
    }
}

$updateProd = new UpdateProd();
$updateProd->updateProd();
$id = $_GET['updateprod'];
$existingDetails = $updateProd->getLastProd($id);
?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="updateprod.css" />
    <title>Editoje Produktin</title>
</head>

<body>
    <main>
        <a href="../../../../Honda Ks/Home/Home.php"></a>
        <div class="login">
            <div class="login-form">
                <div class="logo">
                    <img src="../../Users/Users/logo.jpg" alt="" />
                </div>
                <div class="form">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="sadas">
                            <label class="label" for="name">
                                Ngarkoni Fotografine
                            </label>
                            <?php
                            if (isset($existingDetails['imagep']) && empty($_FILES['imagep']['name'])) {
                                echo '<img class="imagess" src="' . htmlspecialchars($existingDetails['imagep']) . '" alt="" style="max-width: 100%; height: auto;">';
                                echo '<input type="hidden" name="existing_image" value="' . htmlspecialchars($existingDetails['imagep']) . '">';
                            }
                            ?>
                            <input type="file" name="imagep" accept="image/*" require>
                        </div>
                        <br /><br />
                        <div class="sadas">
                            <label class="label" for="username">
                                - Titulli i Produktit
                            </label>
                            <input type="text" class="input-focused" id="username" name="titlep" value="<?php echo isset($existingDetails['titlep']) ? htmlspecialchars($existingDetails['titlep']) : ''; ?>" required>
                        </div>
                        <br /><br />
                        <div class="sadas">
                            <label class="label" for="email">
                                Përshkrimi
                            </label>
                            <textarea class="textarea" id="subject" name="descp"><?php echo isset($existingDetails['descp']) ? htmlspecialchars($existingDetails['descp']) : ''; ?></textarea>
                        </div>
                        <br /><br />
                        <div class="sadas">
                            <label class="label" for="password">
                                - Cmimi
                            </label>
                            <input class="input-focused" type="text" name="pricep" value="<?php echo isset($existingDetails['pricep']) ? htmlspecialchars($existingDetails['pricep']) : ''; ?>" required>
                        </div>
                        <br />
                        <button name="SUBMIT" class="button-submit">Edito Produktin</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
