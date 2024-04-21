<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/map.css">
    <link rel="stylesheet" href="assets/css/sfondo.css">
    <title>Document</title>
</head>
<body>
    <style>
        .index-blok2 {
            display: none;
        }
    </style>
    <?php
        include ('assets/php/heder.php')
    ?>
    <section class="razdel-map">
        <section class="glav-blok">
            <h1 class="magazin-text">МАГАЗИНЫ</h1>
            <div class="map-glav-blok">
                <h1>Алмаз</h1>
                <p>64 Челябинск, Копейское ш., д. 64</p>
                <p>10:00 - 22:00</p>
                <hr>
                <h1>Атриум</h1>
                <p>Москва, ул. Земляной Вал, д. 33</p>
                <p>10:00 - 23:00</p>
                <hr>
                <h1>Аура</h1>
                <p>Сургут, Нефтекганское ш., д. 1</p>
                <p>10:00 - 22:00</p>
            </div>
        </section>
        <head>
            <script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=<12218445-9a52-48f3-a798-03286c6f77d9>" type="text/javascript"></script>
            <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
            <script src="assets/js/object_manage.js" type="text/javascript"></script>
            <div id="map"></div>
        </head>
    </section>
</body>
<script defer  src="assets/js/sfondo.js"></script>
<script defer src="assets/js/Logo.js"></script>
</html>