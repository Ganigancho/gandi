<?php
require_once "../../../ConnectDB.php";

class GetComents extends ConnectDB
{
  public function viewFullComment()
  {
    if (!isset($_GET['formcontact'])) {
      return false;
    }

    $id = $_GET['formcontact'];
    $query = "SELECT * FROM contact_form WHERE id = :id";
    $stmt = $this->connect()->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt) {
      return $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
      return false;
    }
  }
}

$getComment = new GetComents();
$viewComment = $getComment->viewFullComment();

?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="viewfull.css" />
  <title>Kush na Kontaktoi</title>
</head>

<body>
  <main>
    <?php if ($viewComment) : ?>
      <div id="modal" class="modal">
        <div class="content-m">
          <div class="coment-m">
            <p>Emri: <span><?php echo $viewComment['name']; ?></span></p>
            <p>Mbiemri: <span><?php echo $viewComment['surname']; ?></span></p>
            <p>Email: <span><?php echo $viewComment['email']; ?></span></p>
            <p>Komenti: <span><?php echo $viewComment['coment']; ?></span></p>
          </div>
          <div>
            <a class="goback" href="../fromcontactform.php">Kthehu mbrapa  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z" />
            </svg></a>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </main>
</body>

</html>