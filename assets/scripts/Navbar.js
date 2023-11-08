export default class Navbar {
    constructor() {
        this.events()
    }

    toggleMenu() {
        document.querySelector('.js-nav')?.classList.toggle('active')
        document.querySelector('.js-icon')?.classList.toggle('active')
    }

    stopScroll() {
        if (document.querySelector('.js-nav')?.classList.contains('active')) {
            document.body.style.overflowY = 'hidden'

            this.scrollToTop()
        } else {
            document.body.style.overflowY = 'initial'
        }
    }

    scrollToTop() {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
        })
    }

    openHideDropdown(e) {
        const subMenu = e.currentTarget.nextElementSibling

        e.currentTarget.classList.toggle('active')

        if (window.matchMedia('(max-width: 999px)').matches) {
            subMenu.offsetHeight === 0 ? (subMenu.style.maxHeight = `${subMenu.scrollHeight}px`) : (subMenu.style.maxHeight = 0)
        } else {
            subMenu.removeProperty('max-height')
        }
    }

    events() {
        document.querySelector('.js-icon')?.addEventListener('click', () => {
            this.toggleMenu()
            this.stopScroll()
        })

        document.querySelector('.js-dropdown')?.addEventListener('click', e => {
            this.openHideDropdown(e)
        })

        window.addEventListener('resize', () => {
            document.querySelectorAll('.submenu')?.forEach(element => {
                element.style.removeProperty('max-height')
            })
        })
    }
}
