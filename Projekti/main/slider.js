const next = document.querySelector(".slider-next");
const back = document.querySelector(".slider-back");
const cars = document.querySelectorAll(".slider-img");
const carName = document.querySelector("#car-name");
let index = 0;

window.addEventListener('load', () => {
    carName.innerText = cars[0].alt;
});

next.addEventListener("click", () => {
    cars[index].classList.add("hidden");
    index++;

    index = index === cars.length ? 0 : index;

    cars[index].classList.remove("hidden");
    carName.innerText = cars[index].alt;
});

back.addEventListener("click", () => {
    cars[index].classList.add("hidden");
    index--;

    index = index < 0 ? cars.length - 1 : index;

    cars[index].classList.remove("hidden");
    carName.innerText = cars[index].alt;
});

