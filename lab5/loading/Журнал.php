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
  <div class="container mt-4" id="crud">

    <div class="card mb-4">
      <div class="card-body">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-12">
            <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">Успеваемость</h2>

            <form class="input-group md-form form-sm form-2 pl-0" id="form" method="get">
              <input class="form-control my-0 py-1 pl-3 purple-border" type="text" name="name_student" placeholder="Введите Ф.И.О. студента" aria-label="Search">
                <input class="form-control my-0 py-1 pl-3 purple-border" type="text" name="ball" placeholder="Введите оценку" aria-label="Search">


                <button class="button-75" role="button"><span class="text">Отправить</span></button>


            </form>




          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
        <!--Table-->
        <table class="table table-striped" >
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


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script type="text/javascript">
    $("#form").submit(function (e) {
        e.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            type: "GET",
            url: "direct.php",
            data: form_data,
            success: function () {
                alert("Оценка успешно добавлена!");
                // Изменяем URL страницы без перезагрузки
                history.pushState(null, null, window.location.href);
                // Выполняем AJAX-запрос для обновления содержимого страницы
                $.ajax({
                    url: 'Журнал.php',
                    cache: false,
                    success: function(data) {
                        $("#crud").html(data);
                    }
                });
            }
        });
    });
          </script>



</body>

</html>


<!-- HTML !-->


