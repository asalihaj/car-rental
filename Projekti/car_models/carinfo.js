const infoIcon = document.querySelectorAll('.car-info-icon');

function info(id) {
    let infoTab = infoIcon[id].parentElement.parentElement.querySelector('.car-info-tab');
    infoTab.classList.toggle('info-tab-active');
    let listTab = infoTab.querySelector('.car-info-list');
    let listItems = listTab.querySelectorAll('.car-info-item');
    for (let item of listItems) {
        item.classList.toggle('info-item-active');
    }
}