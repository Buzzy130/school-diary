

  <?php
  if ($_SESSION['message']) {
      echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
  }
  unset($_SESSION['message']);
  ?>

</body></html>


<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Добавление группы</title>
    <link rel="stylesheet" href="../../css/group.css" media="screen">
    <link rel="stylesheet" href="../../css/select.scss" media="screen">
    <script class="u-script" type="text/javascript" src="../../js/select.js" defer=""></script>
    <style>
        .btn {
            display: inline-block;
            box-sizing: border-box;
            padding: 0 20px;
            margin: 0 15px 15px 0px;
            outline: none;
            border: none;
            border-radius: 4px;
            height: 32px;
            line-height: 32px;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            color: #fff;
            background-color: #3775dd;
            box-shadow: 0 2px #21487f;
            cursor: pointer;
            user-select: none;
            appearance: none;
            touch-action: manipulation;
            vertical-align: top;
        }
        .btn:hover {
            background-color: #002fed;
        }
        .btn:active {
            background-color: #2f599e !important;
        }
        .btn:focus-visible {
            box-shadow: 0 0 0 3px lightskyblue;
        }
        .btn:disabled {
            background-color: #6c87b5;
            pointer-events: none;
        }
    </style>
</head>
<figure>
    <img src="../../images/unn_logo_ru.png" style="margin: 0px 210px 600px 0px"
         width="650"
         height="auto" />
</figure>
</div>
</div>
<div id="container">
    <br><br><br><br>
    <p>Добавление группы</p>

    <form id="form" method="POST">

        <select name="faculty">
            <opttion selected value="0">Факультет</opttion>
            <option value="ФЛА">ФЛА</option>
            <option value="ФМА">ФМА</option>
            <option value="ФГО">ФГО</option>
            <option value="ФПМИ">ФПМИ</option>
            <option value="ФБ">ФБ</option>
            <option value="АВТФ">АВТФ</option>
        </select>
        <br><br>
        <select name="groupp">
            <opttion selected value="0">Направление</opttion>
            <option value="Прикладная Математика и Информатика">Прикладная Математика и Информатика</option>
            <option value="Прикладная Математика">Прикладная Математика</option>
            <option value="Информатика и вычислительная техника">Информатика и вычислительная техника</option>
            <option value="Информационные системы технологии">Информационные системы технологии</option>
            <option value="Программная инженерия">Программная инженерия</option>
            <option value="Информационная безопасность">Информационная безопасность</option>
            <option value="Техническая физика">Техническая физика</option>
            <option value="Техносферная безопасность">Техносферная безопасность</option>
            <option value="Авиастроение">Авиастроение</option>
            <option value="Электроэнергетика">Электроэнергетика</option>
            <option value="Электротехника">Электротехника</option>
            <option value="Психология">Психология</option>
            <option value="Социология">Социология</option>
            <option value="Филология">Филология</option>
            <option value="Экономика">Экономика</option>
            <option value="Менеджмент">Менеджмент</option>
        </select>
        <br><br>
        <input type="" name="number" placeholder="Номер группы" required>
        <br>
        <button>Подтвердить действие</button>
    </form>
</div>
</div>
</div>
</div>
</section>

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
    $("#form").submit(function (e) { // Устанавливаем событие отправки для формы с id=form
        e.preventDefault();
        var form_data = $(this).serialize(); // Собираем все данные из формы
        $.ajax({
            type: "POST", // Метод отправки
            url: "group.php", // Путь до php файла отправителя
            data: form_data,
            success: function () {
                // Код в этом блоке выполняется при успешной отправке сообщения
                alert("Группа успешно добавлена!");
            }
        });
    });
</script>

</body></html>

