let slider = document.querySelector(".cover-img");
let cars = document.querySelectorAll(".slider-img");
let index = 0;

slider.addEventListener("click", () => {
    cars[index].classList.add("hidden");
    index++;

    index = index === cars.length ? 0 : index;

    cars[index].classList.remove("hidden");
});