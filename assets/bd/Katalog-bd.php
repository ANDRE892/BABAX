<?php
require_once 'bd.php';

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Проверяем, передан ли параметр category в URL
if(isset($_GET['category'])) {
    $category = $_GET['category'];
    
    // Определяем границы id для выборки товаров в зависимости от категории
    switch($category) {
        case 'НОВИНКИ':
            $sql = "SELECT * FROM Katalog WHERE id BETWEEN 1 AND 3";
            break;
        case 'ФУТБОЛКИ':
            $sql = "SELECT * FROM Katalog WHERE id BETWEEN 2 AND 4";
            break;
        case 'ОБУВЬ':
            $sql = "SELECT * FROM Katalog WHERE id BETWEEN 4 AND 6";
            break;
        case 'ДЖИНСЫ':
            $sql = "SELECT * FROM Katalog WHERE id BETWEEN 6 AND 8";
            break;
        case 'КУРТКИ':
            $sql = "SELECT * FROM Katalog WHERE id BETWEEN 8 AND 10";
            break;
        case 'МУЖСКОЕ':
            $sql = "SELECT * FROM Katalog WHERE id BETWEEN 10 AND 12";
            break;
        case 'ЖЕНСКОЕ':
            $sql = "SELECT * FROM Katalog WHERE id BETWEEN 12 AND 14";
            break;
        default:
            // Если переданная категория не распознана, можно вывести сообщение об ошибке или выполнить другое действие по умолчанию
            die("Ошибка: Неправильная категория товаров");
    }
} else {
    // Если параметр category не передан, можно выполнить какое-то другое действие по умолчанию
    die("Ошибка: Категория товаров не указана");
}

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
