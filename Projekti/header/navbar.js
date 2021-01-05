let nav = document.querySelector('.collapsed');
let navList = document.querySelector('.collapsed-navbar');

nav.addEventListener('click', () => {
    navList.classList.toggle('nav-active');

    if (navList.style.animation) {
        navList.style.animation = '';
    } else {
        navList.style.animation = 'fadein 0.4s';
    }
});
