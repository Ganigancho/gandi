<?php
include('../../DataBaza/ConfigSession.php');

// if (!isset($_SESSION["user_id"])) {
//   header("Location: ../../Login/login.php");
//   exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<a href=""></a>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="home.css" />
  <title>Honda Ks</title>
</head>

<body>
  <header>
    <div class="header">
      <div class="content-h">
        <img src="../asetet/logo.jpg" alt="" />
        <ul>
          <a class="home" href="../Home/Home.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" fill="white" class="bi bi-house-door-fill" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
            </svg>
          </a>
          <a href="../pages/Sherbimet/Sherbimet.php">Shërbimet</a>
          <a href="../pages/Kontaktoni/ContactForm.php">Kontaktoni</a>
          <a href="../pages/Produktet/Produktet.php">Produktet</a>
        </ul>
        <input type="text" placeholder="Kerkoni ...." />
        <ul class="ulja">
          <a href="../../DataBaza/Dashboard/Dashboard/dashboard.php">Paneli</a>
          <a href="../../Login/login.php?logout=true">Largoju</a>
          <a class="user">User</a>
        </ul>
      </div>
    </div>
    <div class="header-mobile" id="mobile-up">
      <div class="content-mobile">
        <img src="../asetet/logo.jpg" alt="" />
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
        <input type="search" placeholder="Kerkoni ...." />
        <ul>
          <a href="../pages/Sherbimet/Sherbimet.php">Sherbimet</a>
          <a href="../pages/Kontaktoni/ContactForm.php">Kontaktoni</a>
          <a href="../pages/Produktet/Produktet.php">Produktet</a>
          <a class="logimi" href="../../Login/login.php">Dil nga Faqja</a>
        </ul>
      </div>
    </div>
  </header>
  <main id="close-menu">
    <div class="video-container">
      <video autoplay muted loop id="videoBackground">
        <source src="../asetet/402319976_719973823339428_4120728517617272098_n.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="background-mobile" id="margin-top">
      <img src="../asetet/background-mobile.jpg" alt="">
    </div>
    <div class="main">
      <div class="content-m">
        <div class="pyetjet">
          <h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="22" fill="red" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
            </svg>
            Përse duhet ta zgjedhim Honda Ks
          </h1>
          <p>
            <a href="../../DataBaza//Dashboard/Users/Users/UsersList.php">users</a>
            Ne ofrojmë një përvojë të vlefshme dhe të besueshme në treg, duke
            siguruar cilësi të lartë në çdo produkt dhe shërbim që ofrojmë.
            Përkushtimi ynë ndaj cilësisë dhe profesionalizmit është parimi
            udhëheqës i biznesit tonë.
          </p>
        </div>
        <div class="pyetjet">
          <h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="22" fill="red" class="bi bi-eye-fill" viewBox="0 0 16 16">
              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
            </svg>
            Shërbim i Përkushtuar ndaj Klientit
          </h1>
          <p>
            Ekipi ynë i përkushtuar ndaj klientit është gjithmonë në
            dispozicion për të ndihmuar dhe për të ofruar këshilla të
            nevojshme për zgjedhjen e produktit të duhur për ju. Jemi këtu për
            të siguruar një përvojë të shkëlqyer për klientët tanë.
          </p>
        </div>
        <div class="pyetjet">
          <h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="22" fill="red" class="bi bi-tools" viewBox="0 0 16 16">
              <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
            </svg>
            Përkujdesje Pas Shitjes
          </h1>
          <p>
            Pas blerjes, ne ofrojmë shërbim të vazhdueshëm dhe përkujdesje për
            produktet tuaja. Nëse ka nevojë për ndihmë, kemi disponueshmëri të
            pjesëve origjinale dhe ekipin tonë teknik që është gati të ofrojë
            ndihmë në çdo kohë.
          </p>
        </div>
      </div>
      <div class="img-m">
        <img id="imageSlider" src="../asetet/first.jpg" />
      </div>
    </div>
  </main>
  <footer>
    <div class="footer">
      <h3>Copyright © 2023 | Honda Ks - Fushë Kosovë</h3>
    </div>
  </footer>
</body>
<script src="home.js"></script>
<script src="menu.js"></script>

</html>