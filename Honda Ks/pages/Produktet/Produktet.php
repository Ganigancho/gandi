<?php
require_once "../../../DataBaza/ConnectDB.php";

class GetProduct extends ConnectDB
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
}
$getProd = new GetProduct();

$usersData = $getProd->getProds();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="produktet.css" />
  <title>Honda Ks</title>
</head>

<body>
  <header>
    <div class="header">
      <div class="content-h">
        <img src="../../asetet/logo.jpg" alt="" />
        <ul>
          <a href="../../Home/Home.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" fill="white" class="bi bi-house-door-fill" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
            </svg>
          </a>
          <a href="../Sherbimet/Sherbimet.php">Sherbimet</a>
          <a href="../Kontaktoni/ContactForm.php">Kontaktoni</a>
          <a class="produktet" href="../Produktet/Produktet.php">Produktet</a>
        </ul>
        <input type="text" placeholder="Kerkoni ...." />
        <ul>
          <a href="../../../DataBaza/Dashboard/Dashboard/dashboard.php">Paneli</a>
          <a href="../../../Login/login.php?logout=true">Largoju</a>
        </ul>
      </div>
    </div>
    <div class="header-mobile">
      <div class="content-mobile">
        <a href="../../Home/Home.php"><img src="../../asetet/logo.jpg" alt="" /></a>

        <a href="../../Home/Home.php">
          <h2>Honda KS</h2>
        </a>
        <svg id="menu-visible" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256">
          <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <g transform="scale(5.12,5.12)">
              <path d="M3,8c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM3,23c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM3,38c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175z"></path>
            </g>
          </g>
        </svg>
      </div>
      <div id="menu" class="menu-mobile">
        <input type="search" placeholder="Kerkoni ...." />
        <ul>
          <a href="../Sherbimet/Sherbimet.php">Sherbimet</a>
          <a href="../Kontaktoni/ContactForm.php">Kontaktoni</a>
          <a href="Produktet.php">Produktet</a>
          <a class="logimi" href="../../../Login/login.php">Dil nga Faqja</a>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <div class="main">
      <div class="assprod">
        <?php
        if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin') {

          echo '<a href="../../../DataBaza/Dashboard/Produktet/AddProdPath/addprod.php">Shto Produkt</a>';
        }
        ?>
      </div>
      <div class="content-m">
        <?php foreach ($usersData as $user) : ?>
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
    </div>
    </div>
  </main>
  <footer>
    <div class="footer">
      <h3>Copyright © 2023 | Honda Ks - Fushë Kosovë</h3>
    </div>
  </footer>
</body>
<script src="../../Home/menu.js"></script>

</html>