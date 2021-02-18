const editor = document.querySelector('.container');
const add = document.querySelector('.add');
const closeEditor = document.querySelector('.editor-close');
const editIcons = document.querySelectorAll('.edit-icon');
const editForm = document.querySelector('.edit-submit');

add.addEventListener('click', () => {
    editForm.name = editForm.name.replace('-edit', '-add');
    editor.classList.remove('hidden');
})

closeEditor.addEventListener('click', () => {
    editor.classList.add('hidden')
});

for (let editIcon of editIcons) {
    editIcon.addEventListener('click', () => {
        editForm.name = editForm.name.replace('-add', '-edit');
        editor.classList.remove('hidden');
        let data = document.querySelectorAll(`tr[title='${editIcon.title}'] td`);

    });
}

let users;
const userData = document.querySelectorAll('.data-row');

window.addEventListener('load', () => {
    let table = document.querySelector('.data');
    if (table.offsetHeight > 500) {
        table.style.height = '500px';
    }
});