const closeTab = document.querySelector('.close-tab');

closeTab.addEventListener('click', () => {
    document.querySelector('.reservation-tab').style.display = 'none';
});

const bookNow = document.querySelectorAll('.book-now input[type="button"');

for (let i = 0; i < bookNow.length; i++) {
    bookNow[i].addEventListener('click', () => {
        document.querySelector('.reservation-tab').style.display = 'flex';
        document.querySelector('.reservation-tab select[name="car-select"]').value = document.querySelectorAll('.box-model')[i].title;
    });
}