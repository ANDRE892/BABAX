<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Stick&family=Tektur:wght@400..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/main.css"> 
    <link rel="stylesheet" href="assets/css/sfondo.css">
    <!-- подключение ксс -->

    <title>Document</title>
</head>
<body>
<?php
    include ('assets/php/heder.php')
    ?>
    <main>
        <div class="container-form">
            <h1>Регистрация</h1>
            <form class="form-1" enctype="application/x-www-form-urlencoded" action="/" method="post">
                <div class="form-group">
                    <input type="text" class="r-input undefined" pattern=".*" name="lname" required="">
                    <label class="label">Почта</label>
                </div>
                <div class="form-group">
                    <input type="text" class="r-input undefined" pattern=".*" name="lname" required="">
                    <label class="label">Телефон</label>
                </div>
                <div class="form-group">
                    <input type="text" class="r-input undefined" pattern=".*" name="lname" required="">
                    <label class="label">Пароль</label>
                </div>
                <div class="form-group">
                    <input type="text" class="r-input undefined" pattern=".*" name="lname" required="">
                    <label class="label">Повторите пароль</label>
                </div>
            </form>
        </div>
    </main>
</body>
<script defer src="assets/js/Color-logo.js"></script>
<script defer src="assets/js/Logo.js"></script>
</html>