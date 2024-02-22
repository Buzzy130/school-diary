<?php
require_once '../vendor/db.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Журнал</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/form_news.css">
    <link rel="stylesheet" href="../css/news.scss">
</head>

<body class="hm-gradient">

<main>

    <!--MDB Tables-->
    <div class="container mt-4">

        <div class="card mb-4">
            <div class="card-body">
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">Успеваемость</h2>





                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <!--Table-->
                <table class="table table-striped">
                    <!--Table head-->
                    <thead>
                    <tr>
                        <th>Ф.И.О.</th>
                        <th>Номер группы</th>
                        <th>Отметки</th>
                        <th>Средний балл</th>
                    </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>


                    <?php
                    $table = mysqli_query($connect, 'SELECT * FROM `main`');
                    $table = mysqli_fetch_all($table);
                    foreach ($table as $tables) {

                        ?>
                        <tr>
                            <td><?=$tables[1] ?></td>
                            <td><?=$tables[4] ?></td>
                            <td><?=$tables[6] ?></td>
                            <td><?=$tables[5] ?></td>
                        </tr>


                        <?php
                    }
                    ?>

                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->
            </div>
        </div>

    </div>

    <hr class="my-4">

    </div>


</main>
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


<!-- HTML !-->


