<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="contactform.css" />
    <title>Honda Ks</title>
  </head>
  <header>
    <div class="header">
      <div class="content-h">
        <img src="../../asetet/logo.jpg" alt="" />
        <ul>
          <a href="../../Home/Home.php">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="22"
              height="18"
              fill="white"
              class="bi bi-house-door-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"
              />
            </svg>
          </a>
          <a href="../Sherbimet/Sherbimet.php">Sherbimet</a>
          <a class="kontakt" href="../Kontaktoni/ContactForm.php">Kontaktoni</a>
          <a  href="../Produktet/Produktet.php"
            >Produktet</a
          >
        </ul>
        <input class="inputi" type="text" placeholder="Kerkoni ...." />
        <ul>
          <a href="../../../Login/login.php">Dil nga Faqja</a>
        </ul>
      </div>
    </div>
    <div class="header-mobile" id="mobile-up">
      <div class="content-mobile">
        <a href="../../Home/Home.php"><img src="../../asetet/logo.jpg" alt="" /></a>
        
        <a href="../../Home/Home.php"><h2>Honda KS</h2></a>
        <svg
          id="menu-visible"
          xmlns="http://www.w3.org/2000/svg"
          x="0px"
          y="0px"
          width="20"
          height="20"
          viewBox="0,0,256,256"
        >
          <g
            fill="#ffffff"
            fill-rule="nonzero"
            stroke="none"
            stroke-width="1"
            stroke-linecap="butt"
            stroke-linejoin="miter"
            stroke-miterlimit="10"
            stroke-dasharray=""
            stroke-dashoffset="0"
            font-family="none"
            font-weight="none"
            font-size="none"
            text-anchor="none"
            style="mix-blend-mode: normal"
          >
            <g transform="scale(5.12,5.12)">
              <path
                d="M3,8c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM3,23c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM3,38c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175z"
              ></path>
            </g>
          </g>
        </svg>
      </div>
      <div id="menu" class="menu-mobile">
        <input type="search" placeholder="Kerkoni ...." />
        <ul>
          <a href="../Sherbimet/Sherbimet.php">Sherbimet</a>
          <a href="ContactForm.php">Kontaktoni</a>
          <a href="../Produktet/Produktet.php">Produktet</a>
          <a class="logimi" href="../../../Login/login.php">Dil nga Faqja</a>
        </ul>
      </div>
    </div>
  </header>
    <main id="close-menu">
      <div class="form" id="margin-top" >
        <div class="content-f">
          <form action="/action_page.php" onsubmit="submitForm(event)">
            <label for="fname">First Name</label>
            <input
              required
              type="text"
              id="fname"
              name="firstname"
              placeholder="Emri juaj"
            />

            <label for="lname">Mbiemri</label>
            <input
              required
              type="text"
              id="lname"
              name="lastname"
              placeholder="Mbiemri juaj"
            />

            <label for="email">Email</label>
            <input
              required
              type="text"
              id="email"
              name="email"
              placeholder="Emaili juaj"
            />
            <label for="subject">Koment</label>
            <textarea
              id="subject"
              name="subject"
              placeholder="Na tregoni se cfare ju duhet.."
              style="height: 200px"
            ></textarea>

            <input type="submit" value="Submit" />
          </form>
        </div>
      </div>
    </main>
    <footer>
      <div class="footer">
        <h3>Copyright © 2023 | Honda Ks - Fushë Kosovë</h3>
      </div>
    </footer>
  </body>
  <script src="contact.js"></script>
  <script src="../../Home/menu.js"></script>
</html>
