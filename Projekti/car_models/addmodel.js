

function addCar(imgSrc = '../imgs/models/audi_a7_white.png', name = 'Audi A7', price = '$150') {
    const main = document.querySelector('main');
    const box = document.createElement('div');
    const panel = document.createElement('div');
    const imgDiv = document.createElement('div');
    const img = document.createElement('img');
    const info = document.createElement('div');
    const carNameDiv = document.createElement('div');
    const carName = document.createElement('h2');
    const carPriceDiv = document.createElement('div');
    const carPrice = document.createElement('h2');
    const carPriceLabel = document.createElement('p');
    const bookNowDiv = document.createElement('div');
    const bookNow = document.createElement('a');
    box.classList.add('box-model');
    panel.classList.add('main-panel');
    imgDiv.classList.add('car-image');
    imgDiv.classList.add('flex-mid');
    img.classList.add('flex-mid');
    img.src = imgSrc;
    img.width = '110%';
    img.height = '100%';
    info.classList.add('info');
    carNameDiv.classList.add('car-name');
    carNameDiv.classList.add('flex-mid');
    carName.textContent = name;
    carPriceDiv.classList.add('car-price');
    carPriceDiv.classList.add('flex-mid');
    carPrice.textContent = price;
    carPriceLabel.textContent = '/day';
    bookNowDiv.classList.add('book-now');
    bookNowDiv.classList.add('flex-mid');
    bookNow.classList.add('flex-mid');
    bookNow.textContent = 'BOOK NOW';

    box.appendChild(panel);
    panel.appendChild(imgDiv);
    panel.appendChild(info);
    panel.appendChild(bookNowDiv);
    imgDiv.appendChild(img);
    info.appendChild(carNameDiv);
    info.appendChild(carPriceDiv);
    carNameDiv.appendChild(carName);
    carPriceDiv.appendChild(carPrice);
    carPriceDiv.appendChild(carPriceLabel);
    bookNowDiv.appendChild(bookNow);
    main.appendChild(box);
}