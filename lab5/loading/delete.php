<?php
require_once '../vendor/db.php';
session_start();

$search = $_SESSION['search'];
print_r($search);
$main = mysqli_query($connect, "SELECT * FROM `main` WHERE `name` LIKE '$search'");
$main = mysqli_fetch_assoc($main);
print_r($main['id']);
$param2 = $main['id'];
$end = mysqli_query($connect, "DELETE FROM `main` WHERE `main`.`id` = '$param2'");


$main1 = mysqli_query($connect, "SELECT * FROM `users` WHERE `full_name` LIKE '$search'");
$main1 = mysqli_fetch_assoc($main1);
print_r($main1['id']);
$param1 = $main1['id'];
$end1 = mysqli_query($connect, "DELETE FROM users WHERE `users`.`id` = '$param1'");
$_SESSION['message'] = 'Студент успешно отчислен';
header('Location: ../Главная.php');
?>
