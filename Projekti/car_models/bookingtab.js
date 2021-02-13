const closeTab = document.querySelector('.close-tab');

closeTab.addEventListener('click', () => {
    document.querySelector('.reservation-tab').style.display = 'none';
});

const bookNow = document.querySelectorAll('.book-now input[type="button"');

for (let i = 0; i < bookNow.length; i++) {
    bookNow[i].addEventListener('click', () => {
        document.querySelector('.reservation-tab').style.display = 'flex';
        document.querySelector('select[name="car-name"]').value = document.querySelectorAll('.car-select option')[i].value;
    });
}

function updateDate() {
    let firstDate = document.querySelector('#check-in').value;
    let secondDate = firstDate.split('-')[0] + '-' + firstDate.split('-')[1] + '-' + (parseInt(firstDate.split('-')[2]) + 1);
    document.querySelector('#check-out').setAttribute('min', secondDate);
}