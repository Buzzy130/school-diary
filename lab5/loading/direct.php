<?php
require_once '../vendor/db.php';
session_start();
$name_student = $_GET['name_student'];
$ball = $_GET['ball'];

$check_name = mysqli_query($connect, "SELECT * FROM `main` WHERE `name` = '$name_student'");
if (mysqli_num_rows($check_name) > 0) {
    $user_name = mysqli_fetch_assoc($check_name);
    if($user_name['all_ball'] == NULL)
    {
        $all_ball = $ball;
    }
    else
    {
        $all_ball = "{$user_name['all_ball']}";
        $all_ball = "{$all_ball} {$ball}";
    }
    print_r($all_ball);
    //вытащили все оценки и сюда вписали
    $sum = $user_name['sum'];
    $sum = $sum + $ball;//получили сумму всех отметок
    $quantity = $user_name['quantity'];
    $quantity = $quantity + 1;//колличество отметок
    $ball1 = $user_name['ball'];
    $ball1 = $sum / $quantity;//среднее значение отметок
    $id = $user_name['id'];

    mysqli_query($connect, "UPDATE `main` SET `all_ball` = '$all_ball' WHERE `main`.`id` = '$id'");
    mysqli_query($connect, "UPDATE `main` SET `sum` = '$sum' WHERE `main`.`id` = '$id'");
    mysqli_query($connect, "UPDATE `main` SET `quantity` = '$quantity' WHERE `main`.`id` = '$id'");
    mysqli_query($connect, "UPDATE `main` SET `ball` = '$ball1' WHERE `main`.`id` = '$id'");
    $_SESSION['message'] = 'Отметка успешно добавлена';
    header('Location: Журнал.php');





}
else
{
    $_SESSION['message'] = 'Не удалось внести отметку';
    header('Location: Журнал.php');
}
//получили данные о пользователе


?>