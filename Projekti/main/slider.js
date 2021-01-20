const next = document.querySelector(".slider-next");
const back = document.querySelector(".slider-back");
let cars = document.querySelectorAll(".slider-img");
let index = 0;



next.addEventListener("click", () => {
    cars[index].classList.add("hidden");
    index++;

    index = index === cars.length ? 0 : index;

    cars[index].classList.remove("hidden");
});



back.addEventListener("click", () => {
    cars[index].classList.add("hidden");
    index--;

    index = index < 0 ? cars.length - 1 : index;

    cars[index].classList.remove("hidden");
});

