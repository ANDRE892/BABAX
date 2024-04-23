<header>
        <div class="index-blok1">
            <img id="menuButton" class="Menu" src="assets/svg/Menu.svg" alt="">
            <a href="index.php"  id="scrolling-text" class="maga"><h1>МАГА</h1></a>
        </div>
        <div class="index-blok2">
            <a href="Korzina.php"><img src="assets/svg/korzina.svg" alt=""></a>
            <a href="Map.php"><img src="assets/svg/Map.svg" alt=""></a>
            <a href="User.php"><img src="assets/svg/User.svg" alt=""></a>
        </div>
    </header>
    <section class="katalog-menu">
        <img class="manu-kartinka" id="closeMenuButton" src="assets/svg/Manu-zakr.svg" alt="">
        <div class="pod-katalog-menu">
            <a href="Katalog.php?category=НОВИНКИ">НОВИНКИ</a>
            <a href="Katalog.php?category=ФУТБОЛКИ">ФУТБОЛКИ</a>
            <a href="Katalog.php?category=ОБУВЬ">ОБУВЬ</a>
            <a href="Katalog.php?category=ДЖИНСЫ">ДЖИНСЫ</a>
            <a href="Katalog.php?category=КУРТКИ">КУРТКИ</a>
            <a href="Katalog.php?category=МУЖСКОЕ">МУЖСКОЕ</a>
            <a href="Katalog.php?category=ЖЕНСКОЕ">ЖЕНСКОЕ</a>
        </div>
        <div class="pod-katalog-menu2">
            <a href="Obrende.php">О бренде</a>
            <a href="Informaciya.php">Информация</a>
            <a href="Kontakti.php">Контакты</a>
            <a href="Korzina.php">Корзина </a>
            <span class="vk-tg"><a href="https://vk.com/">VK <img src="assets/svg/VK.svg" alt=""></a> <p>/</p> <a href="https://web.telegram.org/k/">TG <img src="assets/svg/TG.svg" alt=""></a></span>
            <a href="Vxod.php">ВХОД</a>
            <a href="Registraciya.php">РЕГИСТРАЦИЯ</a>
        </div>
    </section>
    <script defer src="assets/js/sfondo.js"></script>
<script>
    function changeCategory(category) {
        document.getElementById("categoryTitle").innerText = category;
        // Здесь может быть ваш код для загрузки товаров из соответствующей категории
    }
</script>