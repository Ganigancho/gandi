<?php
include('../../../ConfigSession.php');

if (!isset($_SESSION["user_id"])) {
  header("Location: ../../../../logout.php");
  exit();
}
if ($_SESSION['user_role'] != 'admin') {

  header("Location: ../../../Honda Ks/Home/Home.php");
  exit();
}
$whoAdd = $_SESSION["name"];

?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="addprod.css" />
  <title>Shto Produktin</title>
</head>

<body>
  <main>
    <div class="login">
      <div class="login-form">
        <div class="logo">
          <img src="../../../../Honda Ks/asetet/logo.jpg" alt="" />
        </div>
        <div class="form">
          <form action="../CRUD Produkteve/prod.srv.php" method="POST" enctype="multipart/form-data">
            <div class="sadas">
              <label class="label" for="name">
                Ngarkoni Fotografine
              </label>
              <input type="file" name="imagep" accept="image/*" required>
            </div>
            <br /><br />
            <div class="sadas">
              <label class="label" for="username">
                - Titulli i Produktit
              </label>
              <input type="text" class="input-focused" id="username" name="titlep" required>

            </div>
            <br /><br />
            <div class="sadas">
              <label class="label" for="email">
                Përshkrimi
              </label>
              <textarea class="textarea" id="subject" name="descp" placeholder="Pershrkimi"></textarea>
            </div>
            <br /><br />
            <div class="sadas">
              <label class="label" for="password">
                - Cmimi
              </label>
              <input class="input-focused" type="text" name="pricep" required>
            </div>
            <br>
            <input class="padd" readonly="readonly" type="text" name="whoadd" value="<?php echo $whoAdd ?>">
            <br />
            <br />
            <button class="button-submit">Shtoje Produktin</button>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>

</html>   
