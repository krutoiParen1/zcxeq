const seatMap = document.getElementById('seat-map');
const selectedSeat = document.getElementById('selected-seat');
const confirmButton = document.getElementById('confirm-button');

const totalSeats = 54;
for (let i = 1; i <= totalSeats; i++) {
    const seat = document.createElement('div');
    seat.classList.add('seat');
    seat.textContent = i;
    seatMap.appendChild(seat);

    seat.addEventListener('click', () => {
        seat.classList.toggle('selected'); 
        updateSelectedSeats();
    });
}

function updateSelectedSeats() {
    const selectedSeats = document.querySelectorAll('.selected');
    const seatNumbers = Array.from(selectedSeats).map(seat => seat.textContent);
    selectedSeat.textContent = `Выбранные места: ${seatNumbers.join(', ')}`;
}

confirmButton.addEventListener('click', () => {
    const selectedSeats = document.querySelectorAll('.selected');
    if (selectedSeats.length === 0) {
        alert('Пожалуйста, выберите место перед подтверждением.');
    } else {
        alert(`Выбранные места: ${Array.from(selectedSeats).map(seat => seat.textContent).join(', ')}`);
    }
});
