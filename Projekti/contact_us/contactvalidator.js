const userData = document.getElementsByClassName("input");

let userFullName = userData[0];
let userEmail = userData[1];
const message = document.getElementById("message");
const submit = document.querySelector('#submit');
const msgSent = document.querySelector('.msg-sent-info');


submit.addEventListener('click', validateContact);

function validateContact(event) {
    if (isNameValid(userFullName)) {
        userFullName.style.border = '1px solid #e5e5e5';
    } else {
        userFullName.style.border = '1px solid red';
        event.preventDefault();
    }

    if (isEmailValid(userEmail)) {
        userEmail.style.border = '1px solid #e5e5e5';
    } else {
        userEmail.style.border = '1px solid red';
        event.preventDefault();
    }

    if (isMessageValid(message)) {
        message.style.border = '1px solid #e5e5e5';
    } else {
        message.style.border = '1px solid red';
        event.preventDefault();
    }

    if (allValid()) {
        msgSent.style.display = 'flex';
    }
}


const allValid = () => {
    return isEmailValid(userEmail) &&
        isNameValid(userFullName) && isMessageValid(message);
}

const isEmailValid = e => {
    const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
    if (emailRegex.test(e.value)) {
        return true;
    } else if (e.value === "" || emptyInput(e)) {
        return false;
    }
}

const isNameValid = e => {
    const nameRegex = /^[a-zA-Z ]+$/;
    if (nameRegex.test(e.value)) {
        return true;
    } else if (e.value === "" || emptyInput(e)) {
        return false;
    }
}

const isMessageValid = e => {
    if (e.value === "" || emptyInput(e)) {
        return false;
    } else {
        return true;
    }
}

const emptyInput = e => {
    return /^[ ]*$/.test(e.value);
}

function emptyAll() {
    userFullName.value = "";
    userEmail.value = "";
    message.value = "";
}