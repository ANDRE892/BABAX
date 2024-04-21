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
    <?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "Baxa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Получаем id товара из URL-адреса
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Выполняем запрос к базе данных для получения информации о товаре по id
    $sql = "SELECT * FROM Katalog WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Выводим информацию о товаре
        while($row = $result->fetch_assoc()) {
            echo '<section class="Tovar-vse">
                    <div class="img-tovar">
                        <div class="img-tovar2">
                            <img src="assets/png/veshi/' . $row["img3"] . '" width="200px" height="200px" alt="">
                            <img src="assets/png/veshi/' . $row["img2"] . '" width="200px" height="200px" alt="">
                        </div>
                        <img src="assets/png/veshi/' . $row["img"] . '" width="600px" height="410px" alt="">
                    </div>
                    <div>
                        <div class="infa2">
                            <h4>' . $row["nazvanie"] . '</h4>
                            <p>' . $row["tovar"] . '</p>
                            <h3>' . $row["cena"] . '</h3>
                            <p>' . $row["razmeri"] . '</p>
                            <button>В КОРЗИНУ</button>
                        </div>
                    </div>
                </section>';
        }
    } else {
        echo "Товар не найден";
    }
} else {
    echo "ID товара не указан";
}

$conn->close();
?>


    </main>
        <?php
    include ('assets/php/foozer.php')
    ?>
</body>
<script defer src="assets/js/Color-logo.js"></script>
<script defer src="assets/js/Logo.js"></script>
</html>