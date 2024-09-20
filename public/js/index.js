function DarkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");

    var darkModeImage = document.getElementById('darkModeImage');
    if (element.classList.contains("dark-mode")) {
        darkModeImage.src = "./style/light-mode.png";
    } else {
        darkModeImage.src = "./style/dark-mode.png";
    }
}
function toggleUserMenu() {
    var menu = document.querySelector('.user-menu');
    if (menu.style.display === 'block') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'block';
    }
}
document.querySelector('.user-profile img').addEventListener('click', function() {
    var userMenu = document.querySelector('.user-menu');
    if (userMenu.style.display === 'block') {
        userMenu.style.display = 'none';
    } else {
        userMenu.style.display = 'block';
    }
})
function updateTime() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    var timeString = hours + ':' + minutes + ':' + seconds;
    document.querySelector('.time').innerHTML = timeString;
}
setInterval(updateTime, 1000);
updateTime();