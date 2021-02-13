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

// function validateRegister(event) {
//     if (validateEmail()) {
//         usernameError.style.display = 'none';
//         if (validateUser()) {
//             usernameError.style.display = 'none';
//             if (passwordValidator()) {
//                 passwordError.style.display = 'none';
//                 if (confirmPasswordMatch()) {
//                     passwordConfirmationError.style.display = 'none';
//                     return true;
//                 } else {
//                     passwordConfirmationError.style.display = 'block';
//                     if (emptyField(confirmPassword)) {
//                         passwordConfirmationError.innerText = "Please confirm your password";
//                     } else {
//                         passwordConfirmationError.innerText = "Password does not match";
//                         // event.preventDefault();
//                     }
//                 }
//             } else {

//                 passwordError.style.display = 'lock';
//                 if (emptyField(password)) {
//                     passwordError.innerText = "Password can't be empty";
//                 } else {
//                     passwordError.innerText = "Password does not meet criteria";
//                 }
//             }
//         } else {
//             usernameError.style.display = 'block';
//             if (emptyField(username)) {
//                 usernameError.innerText = "Username can't be empty";
//             } else {
//                 usernameError.innerText = "Username must be between 4 and 25 characters (and should countain only letters and numbers)";
//             }
//         }
//     } else {
//         emailError.style.display = 'block';
//         if (emptyField(email)) {
//             emailError.innerText = "Email can't be empty";
//         } else {
//             emailError.innerText = "Email format is not correct";
//         }

//         if (validateUser()) {
//             usernameError.style.display = 'none';
//         }
//     }
//     return false;
// }

function validateRegister(event) {
    if (validateEmail()) {
        emailError.style.display = 'none';
    } else {
        event.preventDefault();
        emailError.style.display = 'block';
        if (emptyField(email)) {
            emailError.innerText = "Email can't be empty";
        } else {
            emailError.innerText = "Email format is not correct";
        }
    }

    if (validateUser()) {
        usernameError.style.display = 'none';
    } else {
        event.preventDefault();
        usernameError.style.display = 'block';
        if (emptyField(username)) {
            usernameError.innerText = "Username can't be empty";
        } else {
            usernameError.innerText = "Username must be between 4 and 25 characters (and should countain only letters and numbers)";
        }
    }

    if (passwordValidator()) {
        passwordError.style.display = 'none';
    } else {
        event.preventDefault();
        passwordError.style.display = 'block';
        if (emptyField(password)) {
            passwordError.innerText = "Password can't be empty";
        } else {
            passwordError.innerText = "Password does not meet criteria";
        }
    }

    if (confirmPasswordMatch()) {
        passwordConfirmationError.style.display = 'none';
    } else {
        event.preventDefault();
        passwordConfirmationError.style.display = 'block';
        if (emptyField(confirmPassword)) {
            passwordConfirmationError.innerText = "Please confirm your password";
        } else {
            passwordConfirmationError.innerText = "Password does not match";
        }
    }
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