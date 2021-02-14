let nav = document.querySelector('.collapsed');
let navBar = document.querySelector('.collapsed-navbar');
let navList = document.querySelectorAll('.collapsed-nav-item a');
let middleLine = document.querySelectorAll('.collapsed .line');
const navProfile = document.querySelector('.profile-nav');

nav.addEventListener('click', () => {
    navBar.classList.toggle('nav-active');

    navBar.style.top = (document.querySelector('header').offsetHeight - 2) + 'px';
    nav.classList.toggle('collapsed-active');
    for (let i = 0; i < navList.length; i++) {
        navList[i].classList.toggle('nav-font');
    }
});

navProfile.addEventListener('click', () => {
    document.querySelector('.profile-info').classList.toggle('hidden');
});