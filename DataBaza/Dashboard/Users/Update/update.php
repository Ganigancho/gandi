<?php
require_once '../../../ConnectDB.php';
include('../../../ConfigSession.php');

if (!isset($_SESSION["user_id"])) {
  header("Location: ../../../../logout.php");
  exit(); 
}

class UpdateId extends ConnectDB
{
    public function updateId()
    {
        $id = $_GET['updateid'];

        if (isset($_POST['SUBMIT'])) {
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $passw = $_POST['passw'];

            $pwdSignup = $passw;

            $options = [
                'cost' => 12
            ];
    
            $hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

            $query = "UPDATE users SET name = :name, username = :username, email = :email, passw = :passw , create_data = NOW()  WHERE id = :id";
            $stmt = $this->connect()->prepare($query);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
            $stmt->bindParam(":username", $username, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":passw", $hashedPwd, PDO::PARAM_STR);

            try {
                $stmt->execute();
                header("Location: ../Users/UsersList.php ");
            } catch (PDOException $e) {
                echo "Problem: " . $e->getMessage();
            }
            exit();
        }
    }
}

$updateId = new UpdateId();
$updateId->updateId();
?>

<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="editoje.css" />
  <title>Editoje</title>
</head>

<body>
  <main>
    <div class="login">
      <div class="login-form">
        <div class="logo">
          <img src="../../../../Honda Ks/asetet/logo.jpg" alt="" />
        </div>
        <div class="form">
          <form method="POST">
            <div class="sadas">
              <label class="label" for="name">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="red" class="bi bi-person" viewBox="0 0 13 13">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg>
                - Emri dhe Mbiemri
              </label>
              <input type="text" class="input-focused" id="name" name="name" required>
            </div>
            <br /><br />
            <div class="sadas">
              <label class="label" for="username">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="red" class="bi bi-person" viewBox="0 0 13 13">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg>
                - Emri i përdoruesit
              </label>
              <input type="text" class="input-focused" id="username" name="username" required>
            </div>
            <br /><br />
            <div class="sadas">
              <label class="label" for="email">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="red" class="bi bi-person" viewBox="0 0 13 13">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg>
                - E-maili
              </label>
              <input type="text" class="input-focused" id="email" name="email" required />
            </div>
            <br /><br />
            <div class="sadas">
              <label class="label" for="password"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="red" class="bi bi-lock-fill" viewBox="0 0 13 13">
                  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                </svg>
                - Fjalëkalimi
              </label>
              <input class="input-focused" type="password" id="password" name="passw" required>
            </div>
            <br /><br />
            <button name="SUBMIT" class="button-submit">Editoje</button>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>
<script src="../../../../Regjistroju/register.js"></script>

</html>