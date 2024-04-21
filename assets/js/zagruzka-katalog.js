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
