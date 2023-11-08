export default function Testimonials() {
    document.querySelectorAll('.testimonials').forEach(testimonials => {
        const slider = testimonials.querySelector('.slider_inner'),
            slides = testimonials.querySelectorAll('.slide'),
            prevBtn = testimonials.querySelector('.prev'),
            nextBtn = testimonials.querySelector('.next'),
            numSlides = slides.length

        let slideWidth = slides[0].offsetWidth,
            slideMarginRight = parseInt(getComputedStyle(slides[0]).marginRight),
            moveX = slideWidth + slideMarginRight

        const firstClone = slides[0].cloneNode(true),
            lastClone = slides[numSlides - 1].cloneNode(true)

        firstClone.setAttribute('id', 'first-clone')
        lastClone.setAttribute('id', 'last-clone')

        slider.appendChild(firstClone)
        slider.prepend(lastClone)

        const allSlides = testimonials.querySelectorAll('.slide')

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
}
