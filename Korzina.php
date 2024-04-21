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
        <section>
            <div>
                <hr>
                <?php
// Подключение к базе данных
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
            echo '<div class="formirovka">
                    <div>
                        <img src="' . $row["img"] . '" alt="">
                    </div>
                    <div>
                        <h1>' . $row["nazvanie"] . '</h1>
                        <p>' . $row["tovar"] . '</p>
                        <p>' . $row["razmeri"] . '</p>
                        <p>' . $row["cena"] . '</p>
                    </div>
                    <div class="plus">
                        <h1>-</h1>
                        <p>количество</p>
                        <h1>+</h1>
                    </div>
                    <div class="top">
                        <p>' . $row["price"] . '</p>
                    </div>
                    <div class="top">
                        <h1>Убрать</h1>
                    </div>
                </div>';
        }
    } else {
        echo "Товар не найден";
    }
} else {
    echo "ID товара не указан";
}

$conn->close();
?>
                <hr>
            </div>
        </section>
        <style>
            .formirovka {
                display: flex;
                gap: 100px;
                align-items: center;
            }
            .plus {
                display: flex;
                align-items: center;
                margin-bottom: auto;
            }
            .top {
                margin-bottom: auto;
            }
        </style>
    </main>
</body>
<script defer src="assets/js/sfondo.js"></script>
<script defer src="assets/js/Logo.js"></script>
<script defer src="assets/js/yvedomleniya.js"></script>
</html>