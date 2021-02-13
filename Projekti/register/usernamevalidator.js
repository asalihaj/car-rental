const username = document.getElementById("username");

username.addEventListener('input', validateUser)

function validateUser() {
    var usernameRegex = /^[a-zA-Z0-9]{4,25}$/;
    if (usernameRegex.test(username.value)) {
        document.getElementById("user-logo").src = "../icons/registration/green_user.png";
        return true;
    } else {
        document.getElementById("user-logo").src = "../icons/registration/red_user.png";
        return false;
    }



}

const tos = document.getElementById("tos-checkbox");

tos.addEventListener('click', termsOfService);

function termsOfService() {
    let button = document.getElementById("register-button")
    if (tos.checked === true) {
        button.disabled = false;
        button.style.opacity = "1";
        button.style.cursor = "pointer";
    } else {
        button.disabled = true;
        button.style.opacity = "0.7";
        button.style.cursor = "auto";
    }
}