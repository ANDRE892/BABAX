document.addEventListener('DOMContentLoaded', function() {
    var katalogMenu = document.querySelector('.katalog-menu');
    var menuButton = document.getElementById('menuButton');
    var menu = document.querySelector('.Menu');
    var scrollingText = document.getElementById('scrolling-text');
    var closeMenuButton = document.getElementById('closeMenuButton'); // Добавляем переменную для кнопки закрытия меню

    function toggleMenu() {
        var leftValue = window.getComputedStyle(katalogMenu).getPropertyValue('left');
        if (leftValue === '0px') {
            katalogMenu.style.left = '-250px';
            scrollingText.style.left = '0'; // Возвращаем логотип на изначальную позицию при закрытии боковой панели
            menuButton.style.display = 'block'; // Показываем кнопку меню при закрытии панели
        } else {
            katalogMenu.style.left = '0';
            scrollingText.style.left = '250px'; // Сдвигаем логотип вправо при открытии боковой панели
            menuButton.style.display = 'none'; // Скрываем кнопку меню при открытии панели
        }
    }

    function adjustMenuStyle() {
        if (window.scrollY > 0) {
            menu.style.width = '90px';
            menu.style.top = '8px';
            scrollingText.style.fontSize = '40px';
            if (katalogMenu.style.left === '0px') {
                scrollingText.style.left = '250px'; // Сдвигаем логотип вправо при открытой боковой панели и прокрутке страницы
            } else {
                scrollingText.style.left = '80px'; // Возвращаем логотип на изначальную позицию при закрытой боковой панели и прокрутке страницы
            }
        } else {
            menu.style.width = '';
            menu.style.top = '70px';
            scrollingText.style.fontSize = '30px';
            if (katalogMenu.style.left === '0px') {
                scrollingText.style.left = '250px'; // Сдвигаем логотип вправо при открытой боковой панели без прокрутки страницы
            } else {
                scrollingText.style.left = '0'; // Возвращаем логотип на изначальную позицию при закрытой боковой панели без прокрутки страницы
            }
        }
    }

    function closeMenu() {
        katalogMenu.style.left = '-250px'; // Перемещаем меню за пределы экрана при клике на кнопку закрытия
        if (window.scrollY > 0) {
            scrollingText.style.left = '80px'; // Если страница прокручена вниз, сдвигаем логотип
        } else {
            scrollingText.style.left = '0px'; // Если страница в самом верху, возвращаем логотип на изначальную позицию
        }
        menuButton.style.display = 'block'; // Показываем кнопку меню при закрытии панели
    }
    
    menuButton.addEventListener('click', toggleMenu);
    window.addEventListener('scroll', adjustMenuStyle);
    closeMenuButton.addEventListener('click', closeMenu); // Добавляем обработчик клика на кнопку закрытия меню
});
