<?php
require_once '../../vendor/db.php';
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Добавление студента</title>
    <link rel="stylesheet" href="../../css/search.css" media="screen">


</head>

<form action="search_first.php" class="search-bar" method="get">
    <input type="search" name="search" pattern=".*\S.*" required>
    <button class="search-btn" type="submit">
        <span>Search</span>
    </button>
</form>

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










</body>
</html>
