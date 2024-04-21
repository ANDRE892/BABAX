const phoneSpan = document.getElementById('phone');
const notification = document.getElementById('notification');

phoneSpan.addEventListener('click', () => {
    const phoneText = phoneSpan.textContent.trim();
    copyToClipboard(phoneText);
    showNotification();
});

function copyToClipboard(text) {
    const textarea = document.createElement('textarea');
    textarea.value = text;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand('copy');
    document.body.removeChild(textarea);
}

function showNotification() {
    notification.style.display = 'block';
    setTimeout(() => {
        notification.style.display = 'none';
    }, 2000);
}