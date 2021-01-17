const password = document.getElementById("password");

password.addEventListener('input', passwordValidator);
let passwordStrength = document.getElementById("password-strength");

password.addEventListener("focusin", () => {
    passwordStrength.removeAttribute("hidden");
    if (screen.width <= 414) {
        document.querySelector('main').style.height = 'auto';
        document.querySelector('.panel').style.margin = '10px 0';
    } else {
        document.querySelector('.panel').style.margin = '30px 0';
    }
});

password.addEventListener("focusout", () => {
    if (password.value === "") {
        document.querySelector('main').style.height = '100%';
        document.querySelector('.panel').style.margin = screen.width <= 414 ? '10px 0' : 'auto 0';
        document.getElementById("password-strength").setAttribute("hidden", true);
    }
})

function passwordValidator() {
    let passwordValue = password.value;
    let allValid = hasUpperCase(passwordValue) && hasLowerCase(passwordValue)
        && hasSpecialChar(passwordValue) && hasNumber(passwordValue)
        && checkLength(passwordValue);
    if (hasUpperCase(passwordValue)) {
        document.getElementById('pw-upper').style.color = "#2a9d8f";
    } else {
        document.getElementById('pw-upper').style.color = "#e63946";
    }
    if (hasLowerCase(passwordValue)) {
        document.getElementById('pw-lower').style.color = "#2a9d8f";
    } else {
        document.getElementById('pw-lower').style.color = "#e63946";
    }
    if (hasNumber(passwordValue)) {
        document.getElementById('pw-number').style.color = "#2a9d8f";
    } else {
        document.getElementById('pw-number').style.color = "#e63946";
    }
    if (hasSpecialChar(passwordValue)) {
        document.getElementById('pw-special').style.color = "#2a9d8f";
    } else {
        document.getElementById('pw-special').style.color = "#e63946";
    }
    if (checkLength(passwordValue)) {
        document.getElementById('pw-length').style.color = "#2a9d8f";
    } else {
        document.getElementById('pw-length').style.color = "#e63946";
    }

    if (allValid) {
        document.getElementById("password-strength").setAttribute("hidden", true);
    }

    matcher(allValid, password.value, confirmPassword.value);
    imgColor(allValid, "pw-logo");
    return allValid;
}

const confirmPassword = document.getElementById("confirm-password");

confirmPassword.addEventListener('input', confirmPasswordMatch);

function confirmPasswordMatch() {
    let confirmPasswordValue = confirmPassword.value;
    if (confirmPasswordValue === password.value && passwordValidator()) {
        imgColor(true, "pw-confirm-logo");
        return true;
    } else {
        imgColor(false, "pw-confirm-logo");
        return false;
    }
}

function matcher(valid, password, confirmPassword) {
    if (valid) {
        if (password !== confirmPassword) {
            imgColor(true, "pw-logo");
            imgColor(false, "pw-confirm-logo");
        } else {
            imgColor(true, "pw-logo");
            imgColor(true, "pw-confirm-logo");
        }
    } else {
        imgColor(false, "pw-logo");
        imgColor(false, "pw-confirm-logo");
    }
}

function imgColor(valid, id) {
    if (valid) {
        document.getElementById(id).src = "../icons/registration/green_lock.png";
    } else {
        document.getElementById(id).src = "../icons/registration/red_lock.png";
    }
}



function hasUpperCase(password) {
    return /[A-Z]/.test(password);
}

function hasLowerCase(password) {
    return /[a-z]/.test(password);
}

function hasNumber(password) {
    return /[0-9]/.test(password);
}

function hasSpecialChar(password) {
    return /[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/g.test(password);
}

function checkLength(password) {
    return password.length >= 8;
}