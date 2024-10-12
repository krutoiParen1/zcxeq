// Добавьте этот код в ваш основной JavaScript файл
function showLoadingScreen() {
	document.getElementById('loading-screen').style.visibility = 'visible'
}

function hideLoadingScreen() {
	document.getElementById('loading-screen').style.visibility = 'hidden'
}

window.addEventListener('load', hideLoadingScreen)

// Пример обработки перехода на другую страницу
document.querySelectorAll('a').forEach(link => {
	link.addEventListener('click', function (e) {
		const href = this.getAttribute('href')

		// Проверяем, является ли ссылка якорной (например, #section1)
		if (href && href.startsWith('#')) {
			// Если это якорная ссылка, не отображаем анимацию загрузки
			return
		}

		e.preventDefault() // Останавливаем стандартное поведение ссылки
		showLoadingScreen() // Показываем экран загрузки

		// Задержка перед переходом на новую страницу
		setTimeout(() => {
			window.location.href = href // Переходим на новую страницу
		}, 300) // Задержка для отображения анимации
	})
})
