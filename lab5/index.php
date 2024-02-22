<?php
require_once 'vendor/db.php';
session_start();
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Popup Login Form Design | CodingNepal</title>
  <link rel="stylesheet" href="css/login.scss">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<div class="center">
  <input type="checkbox" id="show">
  <label for="show" class="show-btn">Авторизоваться</label>
  <div class="container">
    <label for="show" class="close-btn fas fa-times" title="close"></label>
    <div class="text">
      Login
    </div>
    <form action="vendor/signup.php" method="post">
      <div class="data">
        <label>Email</label>
        <input type="text" name="email" required>
      </div>
      <div class="data">
        <label>Password</label>
        <input type="password" name="password" required>
      </div>





      <div class="btn">
        <div class="inner"></div>
        <button type="submit">login</button>
      </div>



        <?php
        if ($_SESSION['message']) {
            $message2 = $_SESSION['message'];

            function function_alert($message) {

                // Display the alert box
                echo "<script>alert('$message');</script>";
            }


// Function call
            function_alert("{$message2}");

        }
        unset($_SESSION['message']);
        ?>
    </form>
  </div>
</div>






</body>
</html>