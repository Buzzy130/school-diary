<?php
session_start();
require_once '../../vendor/db.php';

$search = $_GET['search'];
$_SESSION['search'] = $_GET['search'];

$check_name = mysqli_query($connect, "SELECT * FROM `main` WHERE `name` = '$search'");
echo mysqli_num_rows($check_name);
if (mysqli_num_rows($check_name) > 0) {
    $user_name = mysqli_fetch_assoc($check_name);
    header('Location: Поиск_результат.php');
}
else
{
    $_SESSION['message'] = 'Пользователь не найден';
    header('Location: Поиск_студента.php');
}
?>

<pre>
    <?php
    print_r($user_name);
    ?>
</pre>
