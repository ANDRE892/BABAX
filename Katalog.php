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
        <section class="Katalog">
            <div class="png-glav-katalog">
                <section class="katalog-top">
                    <a href="">
                        <div class="katalog-container">
                            <img src="assets/png/katalog/man.jpg" alt="" width="400px" height="600px">
                            <div class="katalog-text">МУЖСКОЕ</div>
                        </div>
                    </a>
                    <a href="">
                        <div class="katalog-container">
                            <img src="assets/png/katalog/women.jpg" alt="" width="400px" height="600px">
                            <div class="katalog-text">ЖЕНСКОЕ</div>
                        </div>
                    </a>
                    <a href="">
                        <div class="katalog-container">
                            <img src="assets/png/katalog/kids.jpg" alt="" width="400px" height="600px">
                            <div class="katalog-text">ДЕТИ</div>
                        </div>
                    </a>
                    <a class="akses" href="">
                        <div class="katalog-container">
                            <img src="assets/png/katalog/akses.jpg" alt="" width="400px" height="600px">
                            <div class="katalog-text">Аксесуары</div>
                        </div>
                    </a>
                </section>
                <section class="vse-veshi">
                    <h1 class="nazvanie">НОВИНКИ</h1>
                    <div class="kart" id="product-container">

                    </div>
                </section>
            </div>
        </section>
    </main>
    <script>
    // Загрузка каталога товаров после загрузки основной страницы
    window.onload = function() {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "assets/bd/Katalog.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById("product-container").innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    };
    </script>
    <?php
    include ('assets/php/foozer.php')
    ?>
</body>
</html>