function updateDate() {
     let firstDate = document.querySelector('#check-in').value;
     let day = parseInt(firstDate.split('-')[2]) + 1;
     let month = firstDate.split('-')[1];
     let year = firstDate.split('-')[0];
     let secondDate = year + '-' + month + '-' + (day < 10 ? "0" + day : day);
     document.querySelector('#check-out').setAttribute('min', secondDate);
}