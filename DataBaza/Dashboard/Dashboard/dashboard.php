<?php
// include('../../ConfigSession.php');
require_once "../../ConnectDB.php";

// if (!isset($_SESSION["user_id"])) {

//   header("Location: ../../../Login/login.php");
//   exit();
// }

// if ($_SESSION['user_role'] != 'admin') {

//   header("Location: ../../../Honda Ks/Home/Home.php");
//   exit();
// }

// $users = strtoupper($_SESSION['user_role']);

class GetData extends ConnectDB
{
  public function getProds()
  {
    $query = "SELECT * FROM products";
    $stmt = $this->connect()->prepare($query);
    $stmt->execute();

    if ($stmt) {
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
      return false;
    }
  }
  public function getComments()
  {
    $query = "SELECT * FROM contact_form";
    $stmt = $this->connect()->prepare($query);
    $stmt->execute();

    if ($stmt) {
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
      return false;
    }
  }
}
//Shfaqja e Produktit te fundit
$getData = new GetData();

$usersData = $getData->getProds();
end($usersData);
$latestProduct = [current($usersData)];

//Shfaqja e emrit kush e ka postu
$whoadd = $getData->getProds();

//Shfaqja e komenti te fundit
$getCc = $getData->getComments();
end($getCc);
$latestComments = [current($getCc)];

?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="dashboard.css" />
  <title>PANELI</title>
</head>

<body>
  <header>
    <div class="header">
      <div class="content-h">
        <img src="../../../Honda Ks/asetet/logo.jpg" alt="" />
        <ul>
          <a class="home" href="../../../Honda Ks/Home/Home.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" fill="white" class="bi bi-house-door-fill" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
            </svg>
          </a>
          <a href="../Users/Users/UsersList.php">PËRDORUESIT</a>
          <a href="../Produktet/Produktet/produktet.php">PRODUKTET</a>
          <a href="../Komentet/fromcontactform.php">MESAZHET NGA KLIENTËT</a>
        </ul>
      </div>
      <div class="useroradmin">
        <p>USER</p>
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
        <ul>
          <a href="../../../Honda Ks/Home/Home.php">FAQJA KRYESORE</a>
          <a href="../Users/Users/UsersList.php">PËRDORUESIT</a>
          <a href="../Produktet/Produktet/produktet.php">PRODUKTET</a>
          <a href="../Komentet/fromcontactform.php">MESAZHET NGA KLIENTËT</a>
          <p class="useroradmin"><?php echo $users . " : " . $_SESSION['name'] ?></p>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <div id="close-menu" class="container">
      <div class="cont">
        <div class="parts">
          <?php foreach ($latestProduct as $user) : ?>
            <h2 class="addprod">- Produkti i fundit i shtuar në listë nga <?php echo $user['whoadd'] ?> -</h2>
            <div class="card-content">
              <div class="image">
                <img src="../../../DataBaza/Dashboard/Produktet/CRUD Produkteve/<?php echo $user['imagep'] ?>" alt="" />
              </div>
              <div class="description">
                <div class="teksti">
                  <h1><?php echo $user['titlep'] ?></h1>
                  <p>
                    <?php echo $user['descp'] ?>
                  </p>
                </div>
                <div class="cmimi">
                  <h2>Cmimi:</h2>
                  <h2 class="cmimii"><?php echo $user['pricep'] ?>€</h2>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="parts">
          <div class="info n">
            <h2 class="addprod">- Komenti i fundit -</h2>
            <?php foreach ($latestComments as $latestComment) : ?>
              <div class="coment-m">
                <p>Emri: <span><?php echo $latestComment['name']; ?></span></p>
                <p>Mbiemri: <span><?php echo $latestComment['surname']; ?></span></p>
                <p>Email: <span><?php echo $latestComment['email']; ?></span></p>
                <p>Komenti: <span><?php echo $latestComment['coment']; ?></span></p>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="info s">
            <h2 class="addprod">- Të Loguarit e Fundit -</h2>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
<script src="../../../Honda Ks/Home/menu.js"></script>

</html>