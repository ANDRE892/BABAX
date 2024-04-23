<?php
require_once 'bd.php';

// Start or resume the session
session_start();

// Check if the 'cart' array exists in the session, if not, initialize it
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Check if an item is being added to the cart
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Execute a query to get information about the item from the database
    $sql = "SELECT * FROM Katalog WHERE id = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Fetch the item details
        $item = $result->fetch_assoc();
        
        // Add the item to the cart
        $_SESSION['cart'][] = $item;
        
        // Redirect back to the same page after adding the item
        header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    } else {
        echo "Товар не найден";
    }
}

// Check if an item is being removed from the cart
if (isset($_GET['remove']) && isset($_GET['index'])) {
    $index = $_GET['index'];
    
    // Remove the item from the cart
    unset($_SESSION['cart'][$index]);
    
    // Redirect back to the same page after removing the item
    header("Location: {$_SERVER['PHP_SELF']}");
    exit();
}

// Display the cart items
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $index => $item) {
        echo '<div class="formirovka">
                <div>
                    <img src="assets/png/veshi/' . $item["img"]  . '" alt="">
                </div>
                <div>
                    <h1>' . $item["nazvanie"] . '</h1>
                    <p>' . $item["tovar"] . '</p>
                    <p>' . $item["razmeri"] . '</p>
                    <p>' . $item["cena"] . '</p>
                </div>
                <div class="plus">
                    <p>количество</p>
                    <p id="count">1</p>
                    <h1 id="plus">+</h1>
                    <h1 id="minus">-</h1>
                </div>
                <div class="top">
                    <p>' . $item["price"] . '</p>
                </div>
                <div class="top">
                    <a class="displaya" href="' . $_SERVER['PHP_SELF'] . '?remove=true&index=' . $index . '"><h1>Убрать</h1></a>
                </div>
            </div>';
    }
} else {
    echo ' <h1 class="fdgs">Корзина пуста</h1>';
}

$conn->close();
?>
