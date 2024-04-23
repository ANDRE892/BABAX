<?php
require_once 'bd.php';

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

$sql = "SELECT * FROM Katalog WHERE id <= 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Создаем HTML-разметку для каждого товара
    while($row = $result->fetch_assoc()) {
        echo '<a href="Tovar.php?id=' . $row["id"] . '">
                <div class="blok-kart">
                    <img src="assets/png/veshi/' . $row["img"] . '" alt="">
                    <h4>' . $row["nazvanie"] . '</h4>
                    <p>' . $row["tovar"] . '</p>
                    <h3>' . $row["cena"] . '</h3>
                    <p>' . $row["razmeri"] . '</p>
                </div>
              </a>';
    }
} else {
    echo "0 результатов";
}

$conn->close();
?>
