const accountLabel = document.querySelector('.account-label h2');
const reservationsLabel = document.querySelector('.reservations-label h2');
const pwChange = document.querySelector('.pw-change');

const account = document.querySelector('.user-data');
const reservations = document.querySelector('.reservations');

accountLabel.addEventListener('click', () => {
    account.classList.remove('hidden');
    reservations.classList.add('hidden');
});

reservationsLabel.addEventListener('click', () => {
    reservations.classList.remove('hidden');
    account.classList.add('hidden');
});

pwChange.addEventListener('click', () => {
    document.querySelector('.bottom').classList.remove('hidden');
})