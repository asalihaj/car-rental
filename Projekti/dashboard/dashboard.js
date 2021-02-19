const editor = document.querySelector('.container');
const add = document.querySelector('.add');
const closeEditor = document.querySelector('.editor-close');
const editIcons = document.querySelectorAll('.edit-icon');
const editForm = document.querySelector('.edit-submit');

add.addEventListener('click', () => {
    editForm.name = editForm.name.replace('-edit', '-add');
    clear();
    editor.classList.remove('hidden');
})

closeEditor.addEventListener('click', () => {
    editor.classList.add('hidden')
});

for (let editIcon of editIcons) {
    editIcon.addEventListener('click', () => {
        editForm.name = editForm.name.replace('-add', '-edit');
        editor.classList.remove('hidden');
        let userData = document.querySelectorAll(`.data-row[title="${editIcon.title}"] td[title]`);
        let table = tablePicker(userData);
        displayData(table, userData);
    });
}

let users;

window.addEventListener('load', () => {
    let table = document.querySelector('.data');
    if (table.offsetHeight > 500) {
        table.style.height = '500px';
    }
});

const clear = () => {
    const dataInput = document.querySelectorAll('.editor-content input');
    const dataSelect = document.querySelectorAll('.editor-content select');
    const dataTextArea = document.querySelectorAll('.editor-content textarea');
    clearInput(dataInput);
    clearInput(dataSelect);
    clearText(dataTextArea);

};

const clearInput = (dataInput) => {
    for (let data of dataInput) {
        data.value = "";
    }
}

const clearText = (dataText) => {
    for (let data of dataText) {
        data.innerText = "";
    }
}