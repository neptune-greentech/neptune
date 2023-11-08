const gallery = document.querySelector('.gallery_slider'),
    galleryInner = document.querySelector('.gallery_slider_inner')

export default function Gallery() {
    if (gallery) {
        let pressed = false,
            startX = null,
            x = null

        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            gallery.addEventListener(
                'touchstart',
                e => {
                    pressed = true
                    startX = e.touches[0].screenX - galleryInner.offsetLeft
                    gallery.style.cursor = 'grabbing'
                },
                { passive: true }
            )

            gallery.addEventListener('touchenter', () => (gallery.style.cursor = 'grab'), { passive: true })

            gallery.addEventListener('touchend', () => (gallery.style.cursor = 'grab'), { passive: true })

            window.addEventListener('touchend', () => (pressed = false), { passive: true })

            gallery.addEventListener(
                'touchmove',
                e => {
                    if (!pressed) return
                    e.preventDefault()

                    x = e.touches[0].screenX

                    galleryInner.style.left = `${x - startX}px`

                    checkBoundary()
                },
                { passive: true }
            )
        } else {
            gallery.addEventListener('mousedown', e => {
                pressed = true
                startX = e.offsetX - galleryInner.offsetLeft
                gallery.style.cursor = 'grabbing'
            })

            gallery.addEventListener('mouseenter', () => (gallery.style.cursor = 'grab'))

            gallery.addEventListener('mouseup', () => (gallery.style.cursor = 'grab'))

            window.addEventListener('mouseup', () => (pressed = false))

            gallery.addEventListener('mousemove', e => {
                if (!pressed) return
                e.preventDefault()

                x = e.offsetX
                galleryInner.style.left = `${x - startX}px`

                checkBoundary()
            })
        }
    }
}

function checkBoundary() {
    const outer = gallery.getBoundingClientRect(),
        inner = galleryInner.getBoundingClientRect()

    if (parseInt(galleryInner.style.left) > 0) {
        galleryInner.style.left = '0px'
    } else if (inner.right < outer.right) {
        galleryInner.style.left = `-${inner.width - outer.width}px`
    }
}
