const carReservationButton = document.getElementById("submit");

carReservationButton.addEventListener('click', pickCar);

function pickCar() {
     carReservationButton.style.cursor = "wait";
     setTimeout(() => {
          window.location.href = "../car_models/models.html";
     }, 2000)
}