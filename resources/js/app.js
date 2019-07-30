document.addEventListener('DOMContentLoaded', function() {
    let classHidden = 'hidden',
        classToggle = 'script-toggle',
        idToggleButton = 'script-toggle-button';
    document.getElementById(idToggleButton).addEventListener('click', function() {
        this.querySelector('.svg-hamburger').classList.toggle(classHidden);
        this.querySelector('.svg-close').classList.toggle(classHidden);
        document.querySelectorAll(`.${classToggle}`).forEach(function(item) {
            item.classList.toggle(classHidden);
        });
    });

    let notification = document.querySelector('.notification');

    if (null !== notification) {
        setTimeout(function () {
            notification.classList.add('hidden');
        }, 5000);
    }

});
