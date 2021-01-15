let nav = document.querySelector('.collapsed');
let navBar = document.querySelector('.collapsed-navbar');
let navList = document.querySelectorAll('.collapsed-nav-item a');

nav.addEventListener('click', () => {
    navBar.classList.toggle('nav-active');

    for (let i = 0; i < navList.length; i++) {
        navList[i].classList.toggle('nav-font');
    }
});
