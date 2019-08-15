document.addEventListener('DOMContentLoaded', function() {
    let classHamburger = 'script-hamburger',
        classHamburgerToggle = 'script-hamburger-toggle',
        classHidden = 'hidden',
        classIsActive = 'is-active';
    document.querySelector(`.${classHamburger}`).addEventListener('click', function() {
        this.classList.toggle(classIsActive);
        document.querySelectorAll(`.${classHamburgerToggle}`).forEach(function(item) {
            item.classList.toggle(classHidden);
        });
    });

    let classNavigationLink = 'script-navigation-link';
    document.querySelectorAll(`.${classNavigationLink}`).forEach(function($item) {
        $item.addEventListener('click', function() {
            document.querySelector(`.${classHamburger}`).dispatchEvent(new MouseEvent('click'));
        });
    });

    let notification = document.querySelector('.notification');
    if (null !== notification) {
        setTimeout(function () {
            notification.style.top = 0;
            notification.style.transition = '1s ease-in-out';
            setTimeout(function () {
                notification.style.top = '-10rem';
                notification.style.transition = '.5s ease-out';
            }, 5000);
        }, 100);
    }

});
