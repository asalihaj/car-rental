const carReservationButton = document.getElementById("submit");

// carReservationButton.addEventListener('click', pickCar);

function pickCar() {
     carReservationButton.style.cursor = "wait";
     window.location.href = "../car_models/models.html";
}

function updateDate() {
     let firstDate = document.querySelector('#check-in').value;
     let secondDate = firstDate.split('-')[0] + '-' + firstDate.split('-')[1] + '-' + (parseInt(firstDate.split('-')[2]) + 1);
     document.querySelector('#check-out').setAttribute('min', secondDate);
}