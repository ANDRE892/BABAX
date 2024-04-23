document.getElementById('plus').addEventListener('click', function() {
    increment();
});

document.getElementById('minus').addEventListener('click', function() {
    decrement();
});

function increment() {
    var countElement = document.getElementById('count');
    var count = parseInt(countElement.textContent);
    countElement.textContent = count + 1;
}

function decrement() {
    var countElement = document.getElementById('count');
    var count = parseInt(countElement.textContent);
    if (count > 0) {
        countElement.textContent = count - 1;
    }
}