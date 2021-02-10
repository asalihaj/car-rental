let registerButton = document.getElementById("register-button");

registerButton.addEventListener('click', validateRegister);

const usernameError = document.querySelector('#username').parentElement
    .parentElement.querySelector('span');
const emailError = document.querySelector('#email').parentElement
    .parentElement.querySelector('span');
const passwordError = document.querySelector('#password').parentElement
    .parentElement.querySelector('span');
const passwordConfirmationError = document.querySelector('#confirm-password').parentElement
    .parentElement.querySelector('span');

function validateRegister() {
    if (validateEmail()) {
        usernameError.style.display = 'none';
        if (validateUser()) {
            usernameError.style.display = 'none';
            if (passwordValidator()) {
                passwordError.style.display = 'none';
                if (confirmPasswordMatch()) {
                    passwordConfirmationError.style.display = 'none';
                    alert("You successfully created an account.");
                    return true;
                } else {

                    passwordConfirmationError.style.display = 'block';
                    if (emptyField(confirmPassword)) {
                        passwordConfirmationError.innerText = "Please confirm your password";
                    } else {
                        passwordConfirmationError.innerText = "Password does not match";
                    }
                }
            } else {

                passwordError.style.display = 'lock';
                if (emptyField(password)) {
                    passwordError.innerText = "Password can't be empty";
                } else {
                    passwordError.innerText = "Password does not meet criteria";
                }
            }
        } else {
            usernameError.style.display = 'block';
            if (emptyField(username)) {
                usernameError.innerText = "Username can't be empty";
            } else {
                usernameError.innerText = "Username must be between 4 and 25 characters (and should countain only letters and numbers)";
            }
        }
    } else {
        emailError.style.display = 'block';
        if (emptyField(email)) {
            emailError.innerText = "Email can't be empty";
        } else {
            emailError.innerText = "Email format is not correct";
        }
    }
    return false;
}

function emptyField(e) {
    return /^[ ]*$/.test(e.value);
}

function emptyAll() {
    email.value = "";
    username.value = "";
    password.value = "";
    confirmPassword.value = "";
    tos.checked = false;
}