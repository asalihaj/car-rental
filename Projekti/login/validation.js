document.getElementById('login-button').addEventListener('click', validator);
function validator() {
    let username = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let error = document.querySelectorAll('.login-error');
    if (username === "" || password === "") {
        error[0].innerText = "Fields can't be empty";
    } else if (emailValidator(username)) {
    } else {
        error[0].innerText = "Email format is not correct";
    }
}

function emailValidator(email) {
    const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
    return emailRegex.test(email.toLowerCase());
}

function passwordValidator(password) {
    if (password.length < 8) {
        return false;
    }
    return true;
}