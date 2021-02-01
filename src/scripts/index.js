import '../styles/index.scss'
import NeptuneCustomizer from "./NeptuneCustomizer"

addEventListener('DOMContentLoaded', () => new NeptuneCustomizer(NeptuneCustomVars))

/**
 * Variables
 */
const
	body = document.body,
	nav = document.querySelector('.nav'),
	navIcon = document.querySelector('.nav_icon'),
	heroFull = document.querySelector('.hero-full'),
	heroImg = document.querySelector('.hero_img'),
	heroOverlay = document.querySelector('.hero_overlay'),
	slider = document.querySelector('.slider'),
	sliderInner = document.querySelector('.slider_inner')

/**
 * Nav mobile menu burger
 */
const setActiveClassOnNav = () => {
	body.classList.contains('active')
		? body.classList.remove('active')
		: body.classList.add('active')
}

navIcon.addEventListener('click', () => setActiveClassOnNav())

/**
 * Height of hero depends of nav height.
 */
if (heroFull) {
	const setHeightOfHero = () => {
		const navHeight = nav.offsetHeight
		heroFull.style.height = `calc(100vh - ${navHeight}px)`
	}

	if (window.matchMedia('(min-width: 1000px)').matches) setHeightOfHero()

	window.addEventListener('resize', () => {
		if (window.matchMedia('(min-width: 1000px)').matches) setHeightOfHero()
		else heroFull.style.height = 'auto'
	})
}

/**
 * Height of the white part on article hero
 */
if (heroOverlay) {
	const setHeightOfOverlay = () => {
		const overlayHeight = heroImg.offsetHeight
		heroOverlay.style.height = `calc(${overlayHeight / 2}px)`
	}
	setHeightOfOverlay()
	window.addEventListener('resize', () => setHeightOfOverlay())
}

/**
 * Gallery draggable
 */

let
	pressed = false,
	startX = null,
	x = null

slider.addEventListener('mousedown', e => {
	pressed = true
	startX = e.offsetX - sliderInner.offsetLeft
	slider.style.cursor = 'grabbing'
})

slider.addEventListener('mouseenter', () => slider.style.cursor = 'grab')

slider.addEventListener('mouseup', () => slider.style.cursor = 'grab')

window.addEventListener('mouseup', () => pressed = false)

slider.addEventListener('mousemove', e => {
	if (!pressed) return
	e.preventDefault()

	x = e.offsetX

	sliderInner.style.left = `${x - startX}px`

	checkBoundary()
})

function checkBoundary() {
	const
		outer = slider.getBoundingClientRect(),
		inner = sliderInner.getBoundingClientRect()

	if (parseInt(sliderInner.style.left) > 0) {
		sliderInner.style.left = '0px'
	} else if (inner.right < outer.right) {
		sliderInner.style.left = `-${inner.width - outer.width}px`
	}
}