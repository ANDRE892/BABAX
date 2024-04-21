<!DOCTYPE html>
<html lang="ru">
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
        <section class="kontakti">
            <h1>Контакты</h1> 
            <p>Телефон: <span id="phone">+7 (495) 995-25-20</span></p>
                <div id="notification">Текст скопирован</div>
            <p>Email: <a href="mailto:mail@mail.ru">mail@mail.ru</a></p> 
            <p>Адрес: г. Москва, какой проспект, 1488А</p> 
        </section>
    </main>
    <?php
    include ('assets/php/foozer.php')
    ?>
</body>
</html>