import '../styles/index.scss'
import NeptuneCustomizer from './NeptuneCustomizer.js'
import Navbar from './Navbar'
import Gallery from './Gallery.js'
import Testimonials from './Testimonials.js'

document.addEventListener('DOMContentLoaded', () => {
    if (neptuneCustomVariables) new NeptuneCustomizer(neptuneCustomVariables)

    new Navbar()

    Gallery()
    Testimonials()
})
