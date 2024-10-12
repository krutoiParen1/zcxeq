// Показать все машины..

function showAllCars() {
	var carCards = document.querySelectorAll('.card_auto')
	carCards.forEach(function (card) {
		card.style.display = 'block'
	})

	var allCarButton = document.querySelector('.all_car')
	allCarButton.style.display = 'none'
}

// Раскрыть/скрыть список машин

var isCardListVisible = true

document.getElementById('close-car').addEventListener('click', function () {
	var carCards = document.querySelectorAll('.card_list')
	var carCards1 = document.querySelectorAll('.card-list-carusel')

	if (isCardListVisible) {
		carCards.forEach(function (card) {
			card.style.display = 'none'
		})
		carCards1.forEach(function (card) {
			card.style.display = 'none'
		})
		document.getElementById('close-car').innerHTML = 'Раскрыть список машин'
	} else {
		carCards.forEach(function (card) {
			card.style.display = 'flex'
		})
		carCards1.forEach(function (card) {
			card.style.display = 'block'
		})
		document.getElementById('close-car').innerHTML = 'Свернуть список машин'
	}

	isCardListVisible = !isCardListVisible
})

//Как подать заявку на автокредит?

document.addEventListener('DOMContentLoaded', function () {
	var questionLinks = document.querySelectorAll('.question__link')

	questionLinks.forEach(function (link) {
		link.addEventListener('click', function () {
			var body = this.nextElementSibling
			if (body.style.maxHeight) {
				body.style.maxHeight = null
			} else {
				body.style.maxHeight = body.scrollHeight + 'px'
			}
		})
	})
})

//
document.querySelectorAll('.menu h3').forEach(function (header) {
	header.addEventListener('click', function () {
		var menu = this.nextElementSibling // Получаем следующий элемент после заголовка (список ul)
		menu.classList.toggle('open') // Добавляем/удаляем класс 'open' для плавного выдвижения вниз
	})
})
