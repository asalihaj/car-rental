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
})

for (let editIcon of editIcons) {
    editIcon.addEventListener('click', () => {
        let rowData = editIcon.parentElement.parentElement;
        rowData.querySelectorAll('td');
        for (let data of rowData) {
            console.log(data);
        }
    });
}