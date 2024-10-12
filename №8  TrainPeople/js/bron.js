var passengerCount = 1; 

document.getElementById('add-passenger').addEventListener('click', function() {
    passengerCount++; 
    var newPassengerDiv = document.createElement('div');
    newPassengerDiv.classList.add('passenger');
    newPassengerDiv.innerHTML = `
        <h2>Пассажир ${passengerCount}</h2>
        <label for="first-name-${passengerCount}">Имя:</label>
        <input type="text" id="first-name-${passengerCount}" required />
        <label for="last-name-${passengerCount}">Фамилия:</label>
        <input type="text" id="last-name-${passengerCount}" required />
        <label for="birth-date-${passengerCount}">Дата рождения:</label>
        <input type="date" id="birth-date-${passengerCount}" required />
        <label for="document-number-${passengerCount}">Номер документа:</label>
        <input type="text" id="document-number-${passengerCount}" required />
    `;
    
    var form = document.getElementById('booking-form');
    var addButton = document.getElementById('add-passenger');
    form.insertBefore(newPassengerDiv, addButton);

    var currentPrice = parseInt(document.getElementById('total-price').innerText.slice(1));

    var newPrice = currentPrice + 1000; 

    document.getElementById('total-price').innerText = '$' + newPrice;
});

document.getElementById('remove-passenger').addEventListener('click', function() {
    var form = document.getElementById('booking-form');
    var passengers = form.getElementsByClassName('passenger');
    if (passengers.length > 1) {
        form.removeChild(passengers[passengers.length - 1]);
        passengerCount--;
        var currentPrice = parseInt(document.getElementById('total-price').innerText.slice(1));
        var newPrice = currentPrice - 1000; 
        document.getElementById('total-price').innerText = '$' + newPrice;
    }
});