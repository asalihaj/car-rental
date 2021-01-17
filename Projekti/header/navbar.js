let nav = document.querySelector('.collapsed');
let navBar = document.querySelector('.collapsed-navbar');
let navList = document.querySelectorAll('.collapsed-nav-item a');

nav.addEventListener('click', () => {
    navBar.classList.toggle('nav-active');

    navBar.style.top = (document.querySelector('header').offsetHeight - 2) + 'px';
    for (let i = 0; i < navList.length; i++) {
        navList[i].classList.toggle('nav-font');
    }
});
