import '../styles/index.scss'
import NeptuneCustomizer from "./NeptuneCustomizer"
import EmblaCarousel from "embla-carousel"
import LocomotiveScroll from "locomotive-scroll"

addEventListener('DOMContentLoaded', function () {
	if (NeptuneCustomVars) {
		new NeptuneCustomizer(NeptuneCustomVars)
	}
})

setTimeout(() => {

	const scroll = new LocomotiveScroll({
		el: document.querySelector('[data-scroll-container]'),
		smooth: false
	})

	setTimeout(() => {
		scroll.update()
	}, 1500)

	runScripts()
}, 1000)

function runScripts() {
	if (document.querySelector('.embla')) {
		
		const rootNode = document.querySelector('.embla')
		const viewportNode = rootNode.querySelector('.embla__viewport')

		const prevButtonNode = rootNode.querySelector('.embla__prev')
		const nextButtonNode = rootNode.querySelector('.embla__next')

		const options = {
			loop: true,
			align: "center",
			skipSnaps: false
		}

		const embla = EmblaCarousel(viewportNode, options)

		prevButtonNode.addEventListener('click', embla.scrollPrev, false)
		nextButtonNode.addEventListener('click', embla.scrollNext, false)
	}
}

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
	gallery = document.querySelector('.gammes_slider'),
	galleryInner = document.querySelector('.gammes_slider_inner'),
	modifiers = document.querySelector('.js-tabs')

/**
 * tabs
 */
if (modifiers) {
	const modifiers = {
		buttonActive: 'tabs__button--active',
		contentActive: 'tabs__content--active'
	};
	
	const attributes = {
		tabIndex: 'data-tab-index'
	};
	
	const elRoot = document.querySelector('.js-tabs');
	const elsButton = elRoot.querySelectorAll('.js-tabs__button');
	const elsContent = elRoot.querySelectorAll('.js-tabs__content');
	
	const changeTab = index => {
		elsButton.forEach(el => {
				el.classList.remove(modifiers.buttonActive);
				if (el.getAttribute(attributes.tabIndex) === index) {
						el.classList.add(modifiers.buttonActive);
						console.log(el);
				}
		});
	
		elsContent.forEach(el => {
				el.classList.remove(modifiers.contentActive);
				if (el.getAttribute(attributes.tabIndex) === index) {
						el.classList.add(modifiers.contentActive);
				}
		});
	};
	
	elsButton.forEach(el => {
	el.addEventListener('click', e => {
			const tabIndex = el.getAttribute(attributes.tabIndex);
	
			e.preventDefault();
			changeTab(tabIndex);
		});
	});
}


/**
 * Nav mobile menu burger
 */
const setActiveClassOnNav = () => {
	body.classList.contains('active')
		? body.classList.remove('active')
		: body.classList.add('active')
}

if(navIcon) {
	navIcon.addEventListener('click', () => setActiveClassOnNav())
}

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
 * Gammes draggable
 */
let
	pressed = false,
	startX = null,
	x = null

if(gallery) {
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		gallery.addEventListener('touchstart', e => {
			pressed = true
			startX = e.touches[0].screenX - galleryInner.offsetLeft
			gallery.style.cursor = 'grabbing'
		}, {passive: true})

		gallery.addEventListener('touchenter', () => gallery.style.cursor = 'grab', {passive: true})

		gallery.addEventListener('touchend', () => gallery.style.cursor = 'grab', {passive: true})

		window.addEventListener('touchend', () => pressed = false, {passive: true})

		gallery.addEventListener('touchmove', e => {
			if (!pressed) return
			e.preventDefault()

			x = e.touches[0].screenX

			galleryInner.style.left = `${(x - startX)}px`

			checkBoundary()
		}, {passive: true})
	} else {
		gallery.addEventListener('mousedown', e => {
			pressed = true
			startX = e.offsetX - galleryInner.offsetLeft
			gallery.style.cursor = 'grabbing'
		})

		gallery.addEventListener('mouseenter', () => gallery.style.cursor = 'grab')

		gallery.addEventListener('mouseup', () => gallery.style.cursor = 'grab')

		window.addEventListener('mouseup', () => pressed = false)

		gallery.addEventListener('mousemove', e => {
			if (!pressed) return
			e.preventDefault()

			x = e.offsetX
			galleryInner.style.left = `${(x - startX)}px`

			checkBoundary()
		})
	}
}

function checkBoundary() {
	const
		outer = gallery.getBoundingClientRect(),
		inner = galleryInner.getBoundingClientRect()

	if (parseInt(galleryInner.style.left) > 0) {
		galleryInner.style.left = '0px'
	} else if (inner.right < outer.right) {
		galleryInner.style.left = `-${inner.width - outer.width}px`
	}
}

/**
 * Testimonials slider
 */
document.querySelectorAll('.gallery').forEach(gallery => {

	const
		slider = gallery.querySelector('.slider_inner'),
		slides = gallery.querySelectorAll('.slide'),
		prevBtn = gallery.querySelector('.prev'),
		nextBtn = gallery.querySelector('.next'),
		numSlides = slides.length

	let
		slideWidth = slides[0].offsetWidth,
		slideMarginRight = parseInt(getComputedStyle(slides[0]).marginRight),
		moveX = slideWidth + slideMarginRight

	const
		firstClone = slides[0].cloneNode(true),
		lastClone = slides[numSlides - 1].cloneNode(true)

	firstClone.setAttribute('id', 'first-clone')
	lastClone.setAttribute('id', 'last-clone')

	slider.appendChild(firstClone)
	slider.prepend(lastClone)

	const allSlides = gallery.querySelectorAll('.slide')

	slider.style.transform = `translateX(${-moveX}px)`

	let counter = 1

	nextBtn.addEventListener('click', () => {
		counter++
		slider.style.transition = 'transform 0.5s ease-in-out, opacity 0.2s'
		slider.style.transform = `translateX(${-(moveX * counter)}px)`
		if (counter >= allSlides.length) counter = numSlides
	})

	prevBtn.addEventListener('click', () => {
		counter--
		slider.style.transition = 'transform 0.5s ease-in-out, opacity 0.2s'
		slider.style.transform = `translateX(${-(moveX * counter)}px)`
		if (counter < 0) counter = 0
	})

	slider.addEventListener('transitionend', () => {
		if (allSlides[counter].id === 'first-clone') {
			slider.style.transition = 'none'
			counter = 1
			slider.style.transform = `translateX(${-(moveX * counter)}px)`
		}

		if (allSlides[counter].id === 'last-clone') {
			slider.style.transition = 'none'
			counter = numSlides
			slider.style.transform = `translateX(${-(moveX * counter)}px)`
		}
	})

	window.addEventListener('resize', () => {
		slideWidth = slides[0].offsetWidth
		slideMarginRight = parseInt(getComputedStyle(slides[0]).marginRight)
		moveX = slideWidth + slideMarginRight
		slider.style.transition = 'none'
		slider.style.transform = `translateX(${-(moveX * counter)}px)`
	})
})

/**
 * Barre de recherche
 */
document.addEventListener('DOMContentLoaded', function() {
  
	var myhiddenthing = document.querySelector('.myhiddenthing');
  
	var mytogglebutton = document.querySelector('.mytogglebutton');
	mytogglebutton.onclick = function() {
	  myhiddenthing.classList.toggle('active');
	};
	
	var myclosebutton = document.querySelector('.myclosebutton');
	myclosebutton.onclick = function() {
	  myhiddenthing.classList.remove('active');
	};
});