const editIcons = document.querySelectorAll('.edit-icon');
const editForm = document.querySelector('.edit-submit');
const addIcon = document.querySelector('.add');

for (let editIcon of editIcons) {
    editIcon.addEventListener('click', () => {
        editForm.name = editForm.name.replace('-add', '-edit');
    });
}

addIcon.addEventListener('click', () => {
    editForm.name = editForm.name.replace('-edit', '-add');
})