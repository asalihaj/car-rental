document.getElementById('login-button').addEventListener('click', validator);
function validator() {
    let username = document.getElementById("email").value;
    let password = document.getElementById('password').value;
    if (username === "" || password === "") {
        alert("Fields can't be empty");
    } else if (emailValidator(username)) {
        if (passwordValidator(password)) {
            alert("Successfully logged in. Redirecting to Home page");
            setTimeout(() => {
                window.location.href = "../main/index.html";
            }, 1000);
        } else {
            alert("Password must have at least 8 characters");
        }
    } else {
        alert("Email format is not correct");
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