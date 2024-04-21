function randomInRange(min, max) {
    return Math.random() * (max - min) + min;
}
function createShape() {
  var shape = document.createElement('div');
  shape.className = 'shape';
  shape.innerHTML = '+';
  shape.style.top = randomInRange(0, window.innerHeight - 100) + 'px';
  shape.style.left = randomInRange(0, window.innerWidth - 100) + 'px';
  
  // Генерируем случайное число для определения направления вращения
  var rotateDirection = Math.random() < 0.5 ? -1 : 1; // -1 для против часовой стрелки, 1 для по часовой стрелке
  shape.style.animationDirection = rotateDirection > 0 ? 'normal' : 'reverse';
  document.body.appendChild(shape);
  shape.addEventListener('animationiteration', function() {
    shape.style.top = randomInRange(0, window.innerHeight - 100) + 'px';
    shape.style.left = randomInRange(0, window.innerWidth - 100) + 'px';
  });
}
// Создаем несколько фигур при загрузке страницы
for (var i = 0; i < 20; i++) {
  createShape();
}