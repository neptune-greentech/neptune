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
	hero = document.querySelector('.hero-full')

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
const setHeightOfHero = () => {
	const navHeight = nav.offsetHeight
	hero.style.height = `calc(100vh - ${navHeight}px)`
}

if (window.matchMedia('(min-width: 1000px)').matches) setHeightOfHero()

window.addEventListener('resize', () => {
	if (window.matchMedia('(min-width: 1000px)').matches) setHeightOfHero()
	else hero.style.height = 'auto'
})