let registerButton = document.getElementById("register-button");

registerButton.addEventListener('click', validateRegister);

function validateRegister() {
    if (validateEmail()) {
        if (validateUser()) {
            if (passwordValidator()) {
                if (confirmPasswordMatch()) {
                    alert("You successfully created an account. You can login now.");

                    setTimeout(() => {
                        window.location.href = "../login/login.html";
                        emptyAll();
                    }, 1000);
                } else {
                    if (emptyField(confirmPassword)) {
                        alert("Please confirm your password");
                    } else {
                        alert("Password does not match");
                    }
                }
            } else {
                if (emptyField(password)) {
                    alert("Password can't be empty");
                } else {
                    alert("Password does not meet criteria");
                }
            }
        } else {
            if (emptyField(username)) {
                alert("Username can't be empty");
            } else {
                alert("Username must be between 4 and 25 characters (and should countain only letters and numbers)");
            }
        }
    } else {
        if (emptyField(email)) {
            alert("Email can't be empty");
        } else {
            alert("Email format is not correct");
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