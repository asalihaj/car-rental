const back = document.querySelector('.back');
const next = document.querySelector('#register-button');

back.addEventListener('click', () => {
    change();
});

next.addEventListener('click', () => {
    if (validateRegister()) {
        change();
    }
});

function change() {
    const panels = document.querySelectorAll('.panel');

    for (let panel of panels) {
        panel.classList.toggle('hidden');
    }
}

