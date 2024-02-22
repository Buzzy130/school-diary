<?php
require_once '../../vendor/db.php';
session_start();

$faculty = $_POST['faculty'];
$groupp = $_POST['groupp'];
$number = $_POST['number'];
$fullname = $_POST['fullname'];

mysqli_query($connect, "INSERT INTO `main` (`id`, `name`, `faculte`, `group`, `number_group`) VALUES (NULL, '$fullname', '$faculty', '$groupp', '$number')");

$_SESSION['message'] = 'Студент успешно добавлен';
header('Location: Добавление_студента.php');
?>