function updateTime() {
    const timeElement = document.getElementById('updateTime');
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    timeElement.textContent = `${hours}:${minutes}`;
}

function DarkMode() {
    const body = document.body;
    body.classList.toggle('dark-mode');
    const darkModeImage = document.getElementById('darkModeImage');
    if (body.classList.contains('dark-mode')) {
        darkModeImage.src = './style/light-mode.png';
    } else {
        darkModeImage.src = './style/dark-mode.png';
    }
}

function toggleUserMenu() {
    const userMenu = document.querySelector('.user-menu');
    userMenu.classList.toggle('show');
}

document.addEventListener('DOMContentLoaded', () => {
    updateTime();
    setInterval(updateTime, 60000); // Update time every minute

    const userProfileImage = document.querySelector('.user-profile img');
    userProfileImage.addEventListener('click', toggleUserMenu);
});
