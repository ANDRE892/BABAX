document.addEventListener('DOMContentLoaded', function() {
    var scrollingText = document.getElementById('scrolling-text');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
            scrollingText.style.color = "#00000048"; // Меняем цвет при прокрутке
        } else {
            scrollingText.style.color = "#000"; // Возвращаем черный цвет при возвращении вверх
        }
    });
});
