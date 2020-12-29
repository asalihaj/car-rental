const email = document.getElementById("email");

email.addEventListener('input', validateEmail);

function validateEmail() {
    const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;

    if (emailRegex.test(email.value)) {
        document.getElementById("email-logo").src = "../icons/registration/green_email.png";
        return true;
    } else {
        document.getElementById("email-logo").src = "../icons/registration/red_email.png";
        return false;
    }
}

