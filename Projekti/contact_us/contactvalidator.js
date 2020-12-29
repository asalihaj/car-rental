const userData = document.getElementsByClassName("input");

let userFullName = userData[0];
let userEmail = userData[1];
const message = document.getElementById("message");

function validateContact() {
    switch (isNameValid(userFullName)) {
        case 0:
            switch (isEmailValid(userEmail)) {
                case 0:
                    switch (isMessageValid(message)) {
                        case 0:
                            alert("Message successfully send.");
                            setTimeout(() => {
                                window.location.href = "../main/index.html";
                                emptyAll()
                            }, 1000);

                            break;
                        case 1:
                            alert("Message can't be empty!");
                            break;
                    }
                    break;
                case 1:
                    alert("Email can't be empty!");
                    break;
                case 2:
                    alert("Email format is not valid. Please enter a valid email.");
                    break;
            }
            break;
        case 1:
            alert("Name can not be empty");
            break;
        case 2:
            alert("Please enter your full name");
            break;
    }
}

const isEmailValid = e => {
    const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
    if (emailRegex.test(e.value)) {
        return 0;
    } else if (e.value === "" || emptyInput(e)) {
        return 1;
    } else {
        return 2;
    }
}

const isNameValid = e => {
    const nameRegex = /^[a-zA-Z]+ [a-zA-Z]+$/;
    if (nameRegex.test(e.value)) {
        return 0;
    } else if (e.value === "" || emptyInput(e)) {
        return 1;
    } else {
        return 2;
    }
}

const isMessageValid = e => {
    if (e.value === "" || emptyInput(e)) {
        return 1;
    } else {
        return 0;
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