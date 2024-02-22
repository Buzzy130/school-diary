<?php
session_start();
require_once 'db.php';

 $email = $_POST['email'];
 $password = $_POST['password'];

 $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
 echo mysqli_num_rows($check_user);
 if (mysqli_num_rows($check_user) > 0) {
     $user = mysqli_fetch_assoc($check_user);
     header('Location: ../Главная.php');
     }
 else
 {
     $check_user1 = mysqli_query($connect, "SELECT * FROM `student` WHERE `email` = '$email' AND `password` = '$password'");
     echo mysqli_num_rows($check_user1);
     if (mysqli_num_rows($check_user1) > 0) {
         $user1 = mysqli_fetch_assoc($check_user1);
         header('Location: ../Главная_студент.html');
     }
     else
     {
         $_SESSION['message'] = 'Не верный логин или пароль';
         header('Location: ../index.php');
     }
 }
?>

