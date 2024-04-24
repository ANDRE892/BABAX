<header>
        <div class="index-blok1">
            <img id="menuButton" class="Menu" src="assets/svg/Menu.svg" alt="">
            <a href="index.php"  id="scrolling-text" class="maga"><h1>МАГА</h1></a>
        </div>
        <div class="index-blok2">
            <a href="Korzina.php"><img src="assets/svg/korzina.svg" alt=""></a>
            <a href="Map.php"><img src="assets/svg/Map.svg" alt=""></a>
        </div>
    </header>
    <section class="katalog-menu">
        <img class="manu-kartinka" id="closeMenuButton" src="assets/svg/Manu-zakr.svg" alt="">
        <div class="pod-katalog-menu">
            <!-- Url в href -->
            <a href="Katalog.php?category=НОВИНКИ">НОВИНКИ</a>
            <a href="Katalog.php?category=ФУТБОЛКИ">ФУТБОЛКИ</a>
            <a href="Katalog.php?category=ОБУВЬ">ОБУВЬ</a>
            <a href="Katalog.php?category=ДЖИНСЫ">ДЖИНСЫ</a>
            <a href="Katalog.php?category=КУРТКИ">КУРТКИ</a>
            <a href="Katalog.php?category=МУЖСКОЕ">МУЖСКОЕ</a>
            <a href="Katalog.php?category=ЖЕНСКОЕ">ЖЕНСКОЕ</a>
        </div>
        <div class="pod-katalog-menu2">
            <a href="index.php">Главная</a>
            <a href="Obrende.php">О бренде</a>
            <a href="Pomosh.php">Информация</a>
            <a href="Kontakti.php">Контакты</a>
            <a href="Korzina.php">Корзина </a>
            <span class="vk-tg"><a href="https://vk.com/">VK <img src="assets/svg/VK.svg" alt=""></a> <p>/</p> <a href="https://web.telegram.org/k/">TG <img src="assets/svg/TG.svg" alt=""></a></span>
            <?php
            session_start();

            // Проверяем, вошел ли пользователь
            if (isset($_SESSION['user'])) {
                // echo '<!-- Пользователь вошел, ссылки не отображаются -->';
                // Выводим кнопку "Выход"
                echo '<form action="Logout.php" method="post">';
                echo '<input class="vixod" type="submit" value="ВЫХОД">';
                echo '</form>';
            } else {
                // Пользователь не вошел, отображаем ссылки ВХОД и РЕГИСТРАЦИЯ
                echo '<a href="Vxod.php">ВХОД</a>';
                echo '<a href="Registraciya.php">РЕГИСТРАЦИЯ</a>';
            }
            ?>
        </div>
    </section>
    <script defer src="assets/js/sfondo.js"></script>
<script>
    function changeCategory(category) {
        document.getElementById("categoryTitle").innerText = category;
    }
</script>