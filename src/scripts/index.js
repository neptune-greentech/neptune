import '../styles/index.scss'
import NeptuneCustomizer from "./NeptuneCustomizer"

addEventListener('DOMContentLoaded', () => new NeptuneCustomizer(NeptuneCustomVars))

/**
 * Variables
 */
const
	nav = document.querySelector('.nav'),
	hero = document.querySelector('.hero'),
	navIcon = document.querySelector('.nav_icon')

/**
 * Height of hero depends of nav height.
 */
const setHeightOfHero = () => {
	const navHeight = nav.offsetHeight
	hero.style.height = `calc(100vh - ${navHeight}px)`
}

setHeightOfHero()
window.addEventListener('resize', () => setHeightOfHero())

/**
 * Nav mobile menu burger
 */
const setActiveClassOnNav = () => {
	nav.classList.contains('active')
		? nav.classList.remove('active')
		: nav.classList.add('active')
}

navIcon.addEventListener('click', () => setActiveClassOnNav())