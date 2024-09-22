document.addEventListener('DOMContentLoaded', function() {
    var icons = document.querySelectorAll('.icons img');
    icons.forEach(function(icon) {
        icon.addEventListener('click', function() {
            icon.classList.toggle('selected');
            var selectedIcons = [];
            icons.forEach(function(i) {
                if (i.classList.contains('selected')) {
                    selectedIcons.push(i.getAttribute('title'));
                }
            });
            localStorage.setItem('selectedIcons', JSON.stringify(selectedIcons));
        });
    });
});
