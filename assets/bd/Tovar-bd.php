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
                            <button onclick="addToCart(' . $id . ')">В КОРЗИНУ</button>
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

<script>
    function addToCart(id) {
        window.location.href = 'Korzina.php?id=' + id;
    }
</script>
