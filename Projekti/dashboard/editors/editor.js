function tablePicker(userData) {
    const regex = /^[a-zA-Z]+_id$/;
    for (let data of userData) {
        if (regex.test(data.title)) {
            return data.title;
        }
    }
}

function displayData(table, data) {
    switch (table) {
        case 'user_id':
            displayUser(data);
            break;
        case 'service_id':
            displayService(data);
            break;
        case 'rental_id':
            displayRental(data);
            break;
        case 'car_id':
            displayCar(data);
            break;
        case 'contact_id':
            displayContact(data);
            break;

    }
}

const displayUser = (data) => {
    let userData = document.querySelectorAll('.editor-data-info input');
    for (let user of userData) {
        switch (user.name) {
            case 'id':
                user.value = data[0].innerText;
                break;
            case 'username':
                user.value = data[1].innerText;
                break;
            case 'email':
                user.value = data[2].innerText;
                break;
            case 'role':
                user.value = data[3].innerText;
                break;
        }
    }
}

const displayRental = (data) => {
    let rentalData = document.querySelectorAll('.editor-data-info input');
    for (let rental of rentalData) {
        switch (rental.name) {
            case 'id':
                rental.value = data[0].innerText;
                break;
            case 'rental-date':
                rental.value = data[1].innerText;
                break;
            case 'return-date':
                rental.value = data[2].innerText;
                break;
            case 'pu-location':
                rental.value = data[3].innerText;
                break;
            case 'do-location':
                rental.value = data[4].innerText;
                break;
            case 'user':
                rental.value = data[5].innerText;
                break;
            case 'car':
                rental.value = data[6].innerText;
                break;
            case 'total':
                rental.value = data[7].innerText;
                break;
        }
    }
}

const displayService = (data) => {
    let serviceData = document.querySelectorAll('.editor-data-info input');
    let description = document.querySelector('.editor-data-info textarea');
    for (let service of serviceData) {
        switch (service.name) {
            case 'id':
                service.value = data[0].innerText;
                break;
            case 'service-title':
                service.value = data[1].innerText;
                break;
        }
    }
    description.innerText = data[2].innerText;
}

const displayContact = (data) => {
    let contactData = document.querySelectorAll('.editor-data-info input');
    for (let contact of contactData) {
        switch (contact.name) {
            case 'id':
                contact.value = data[0].innerText;
                break;
            case 'full-name':
                contact.value = data[1].innerText;
                break;
            case 'email':
                contact.value = data[2].innerText;
                break;
            case 'message':
                contact.value = data[2].innerText;
                break;
        }
    }
}

const displayCar = (data) => {
    let carData = document.querySelectorAll('.editor-data-info input');
    let carSelect = document.querySelectorAll('.editor-data-info select');
    for (let car of carData) {
        switch (car.name) {
            case 'id':
                car.value = data[0].innerText;
                break;
            case 'manufacturer':
                car.value = data[1].innerText;
                break;
            case 'model':
                car.value = data[2].innerText;
                break;
            case 'color':
                car.value = data[3].innerText;
                break;
            case 'prod-year':
                car.value = data[4].innerText;
                break;
            case 'rental-rate':
                car.value = data[8].innerText;
                break;
            case 'capacity':
                car.value = data[9].innerText;
                break;
        }
        for (let carOption of carSelect) {
            switch (carOption.name) {
                case 'transmission':
                    carSelect[0].value = data[5].innerText.toLowerCase();
                    break;
                case 'category':
                    carSelect[1].value = data[6].innerText.toLowerCase();
                    break;
            }
        }
    }
}