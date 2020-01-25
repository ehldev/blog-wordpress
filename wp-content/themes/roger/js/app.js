// Hamburger
const hamburger = document.getElementById('hamburger'),
 	nav = document.getElementById('nav')

// Hamburger event
hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('is-active');
	nav.classList.toggle('nav--active');
})

// Carousel
const carousel = document.getElementById('carousel'),
	items = carousel.querySelectorAll('.carousel__item'),
	nextButton = document.getElementById('nextButton'),
	prevButton = document.getElementById('prevButton')

var i = 0

// Display none
const setItem = () => {
	items.forEach(item => {
		item.style.display = 'none'
	})
	
	// Imprimir primer elemento
	items[i].style.display = 'block'
}

setItem()

const next = () => {
	if (i < items.length - 1) {
		i++
		setItem()
		items[i].classList.add('animated', 'fadeIn', 'slower')
	} else {
		i = 0
		setItem()
		items[i].classList.add('animated', 'fadeIn', 'slower')
	}
}

const prev = () => {
	if(i > 0) {
		i--
		setItem()
		items[i].classList.add('animated', 'fadeIn', 'slower')
	} else {
		i = items.length -1
		setItem()
		items[i].classList.add('animated', 'fadeIn', 'slower')
	}
}

nextButton.addEventListener('click', e => {
	next()
})

prevButton.addEventListener('click', e => {
	prev()
})

setInterval(() => {
	next()
}, 5000)

// Calcular posición de scroll para mostrar borde en el header

const header = document.getElementById('header')

window.onscroll = () => {
	if(window.scrollY >= 400) {
		header.classList.add('header--border')
	} else {
		header.classList.remove('header--border')
	}
}