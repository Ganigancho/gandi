<?php
require_once "../../ConnectDB.php";
include('../../ConfigSession.php');

if (!isset($_SESSION["user_id"])) {
  header("Location: ../../../logout.php");
  exit();
}

if ($_SESSION['user_role'] != 'admin') {

  header("Location: ../../../Honda Ks/Home/Home.php");
  exit();
}

$users = strtoupper($_SESSION['user_role']);

class GetComents extends ConnectDB
{
  public function getComments()
  {
    $query = "SELECT * from contact_form";
    $stmt = $this->connect()->prepare($query);
    $stmt->execute();
    if ($stmt) {
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
      return false;
    }
  }
}
$getComents = new GetComents();
$viewComments = $getComents->getComments();
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="fromcontactform.css" />
  <title>Kush na Kontaktoi</title>
</head>

<body>
  <header>
    <div id="header" class="header">
      <div class="content-h">
        <img src="../../../Honda Ks/asetet/logo.jpg" alt="" />
        <ul>
          <a class="home" href="../../../Honda Ks/Home/Home.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" fill="white" class="bi bi-house-door-fill" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
            </svg>
          </a>
          <a href="../Dashboard/dashboard.php">PANELI</a>
        </ul>
      </div>
      <div class="useroradmin">
        <p><?php echo $users . " : " . $_SESSION['name'] ?></p>
      </div>
    </div>
    <div class="header-mobile" id="mobile-up">
      <div class="content-mobile">
      <img src="../../../Honda Ks/asetet/logo.jpg" alt="" />
        <h2>Honda KS</h2>
        <svg id="menu-visible" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256">
          <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <g transform="scale(5.12,5.12)">
              <path d="M3,8c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM3,23c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM3,38c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175z"></path>
            </g>
          </g>
        </svg>
      </div>
      <div id="menu" class="menu-mobile">
        <ul id="link-a">
          <a href="../Dashboard/dashboard.php">PANELI</a>
        </ul>
      </div>
    </div>
  </header>
  <main id="close-menu">
    <div id="container" class="container">
      <div class="table">
        <div class="colums i">
          <p>ID</p>
          <p>Emri</p>
          <p>Mbiemri</p>
          <p>Emaili</p>
          <p>Komenti</p>
          <p>Koha</p>
          <p>Funksionet</p>
        </div>
        <?php foreach ($viewComments as $coment) : ?>
          <div class="colums">
            <p><?php echo $coment['id']; ?></p>
            <p><?php echo $coment['name']; ?></p>
            <p><?php echo $coment['surname']; ?></p>
            <p><?php echo $coment['email']; ?></p>
            <p><?php echo substr($coment['coment'], 0, 12); ?></p>
            <p><?php echo $coment['create_data']; ?></p>
            <div class="butonat">
              <a id="fullsc" href="./ShikoTePlote/viewfull.php?formcontact=<?php echo $coment['id']; ?>">Shikoje të plotë</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>
</body>
<script src="../../../Honda Ks/Home/menu.js"></script>
</html>