<?php
require_once '../../vendor/db.php';
session_start();

$faculty = $_POST['faculty'];
$groupp = $_POST['groupp'];
$number = $_POST['number'];

mysqli_query($connect, "INSERT INTO `group` (`id`, `faculty`, `groupp`, `number`) VALUES (NULL, '$faculty', '$groupp', '$number')");

$_SESSION['message'] = 'Группа успешно добавлена';
header('Location: Добавление-группы.php');
?>