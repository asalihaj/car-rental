const infoIcon = document.querySelectorAll('.car-info-icon');

function info(id) {
    let infoTab = infoIcon[id].parentElement.parentElement.querySelector('.car-info-tab');
    infoTab.classList.toggle('info-tab-active');
}