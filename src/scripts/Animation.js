import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

gsap.registerPlugin(ScrollTrigger)

export default class Animation {
    constructor() {
        this.headerHome()
        this.messageFort()
        this.listesIcones()
        this.modulaire()
        this.gammes()
        this.produits()
        this.actualites()
        this.temoignages()
    }

    headerHome() {
        const block = document.querySelector('.wp-block-lazyblock-header-home')
        const blockBtn = document.querySelector('.wp-block-lazyblock-header-home .anim_scale')

        const timeline = gsap.timeline({
            defaults: { duration: 1, ease: 'expo.out' },
            scrollTrigger: { trigger: block }
        })
        const timelineBtn = gsap.timeline({
            defaults: { duration: 0.4, ease: 'expo.out' },
            scrollTrigger: { trigger: blockBtn }
        })

        timeline
            .to(block.querySelector('.anim_cloud'), { opacity: 1 }, 0.2)
            .to(block.querySelector('.anim_cloud'), { y: 0, scale: 1, duration: 3, ease: 'expo.out' }, 0.2)
            .to(block.querySelector('.anim_title'), { y: 0, opacity: 1, rotate: 0 }, 0.4)
            .to(block.querySelector('.anim_panel-bottom'), { scaleY: 1, opacity: 1 }, 0.6)

        timelineBtn.to(blockBtn, { scale: 1, opacity: 1 })
    }

    messageFort() {
        const block = document.querySelector('.wp-block-lazyblock-section-message-fort')

        const timeline = gsap.timeline({
            defaults: { duration: 1, ease: 'expo.out' },
            scrollTrigger: { trigger: block, start: 'top center' }
        })

        timeline
            .to(block.querySelector('.anim_opacity'), { opacity: 1 }, 0)
            .to(block.querySelector('.anim_title'), { y: 0, opacity: 1, rotate: 0 }, 0.1)
            .to(block.querySelectorAll('.anim_scale'), { scale: 1, opacity: 1, rotate: 0 }, 0.2)
            .to(block.querySelector('.anim_overlay'), { scaleY: 0 }, 0.4)
            .to(block.querySelector('.anim_zoom'), { scale: 1, duration: 4 }, 0.4)
    }

    listesIcones() {
        const block = document.querySelector('.wp-block-lazyblock-sections-listes-and-icones')

        const timeline = gsap.timeline({
            defaults: { duration: 1, ease: 'expo.out' },
            scrollTrigger: { trigger: block, start: 'top center' }
        })

        timeline
            .to(block.querySelector('.anim_opacity'), { opacity: 1 }, 0)
            .to(block.querySelector('.anim_title'), { y: 0, opacity: 1, rotate: 0 }, 0.1)
            .to(block.querySelectorAll('.anim_scale'), { scale: 1, opacity: 1, rotate: 0 }, 0.2)
            .to(block.querySelector('.anim_opacity2'), { opacity: 1 }, 0.4)
    }

    modulaire() {
        const block = document.querySelector('.wp-block-lazyblock-section-modulaire')

        const timeline = gsap.timeline({
            defaults: { duration: 1, ease: 'expo.out' },
            scrollTrigger: { trigger: block, start: 'top center' }
        })

        timeline
            .to(block.querySelector('.anim_opacity'), { opacity: 1 }, 0)
            .to(block.querySelector('.anim_title'), { y: 0, opacity: 1, rotate: 0 }, 0.1)
            .to(block.querySelectorAll('.anim_overlay'), { scaleY: 0, stagger: 0.15 }, 0.3)
            .to(block.querySelector('.anim_opacity2'), { opacity: 1 }, 0.4)
            .to(block.querySelectorAll('.anim_scale'), { scale: 1, opacity: 1, rotate: 0, stagger: 0.15 }, 0.5)
    }

    gammes() {
        const block = document.querySelector('.wp-block-lazyblock-section-gammes')

        const timeline = gsap.timeline({
            defaults: { duration: 1, ease: 'expo.out' },
            scrollTrigger: { trigger: block, start: 'top center' }
        })

        timeline
            .to(block.querySelector('.anim_opacity'), { opacity: 1 }, 0)
            .to(block.querySelector('.anim_title'), { y: 0, opacity: 1, rotate: 0 }, 0.1)
            .to(block.querySelectorAll('.anim_scale'), { scale: 1, opacity: 1, stagger: 0.15 }, 0.2)
            .to(block.querySelectorAll('.anim_opacity2'), { opacity: 1, stagger: 0.45 }, 0.2)
    }

    produits() {
        const block = document.querySelector('.wp-block-lazyblock-section-produits')
        const blockBtn = document.querySelector('.wp-block-lazyblock-section-produits .anim_scale2')

        const timeline = gsap.timeline({
            defaults: { duration: 1, ease: 'expo.out' },
            scrollTrigger: { trigger: block, start: 'top center' }
        })
        const timelineBtn = gsap.timeline({
            defaults: { duration: 0.4, ease: 'expo.out' },
            scrollTrigger: { trigger: blockBtn }
        })

        timeline
            .to(block.querySelector('.anim_opacity'), { opacity: 1 }, 0)
            .to(block.querySelector('.anim_title'), { y: 0, opacity: 1, rotate: 0 }, 0.1)
            .to(block.querySelectorAll('.anim_opacity2'), { opacity: 1 }, 0.2)
            .to(block.querySelectorAll('.anim_scale'), { scale: 1, opacity: 1, stagger: 0.15 }, 0.2)

        timelineBtn.to(blockBtn, { scale: 1, opacity: 1 })
    }

    actualites() {
        const block = document.querySelector('.wp-block-lazyblock-section-actualites')
        const blockBtn = document.querySelector('.wp-block-lazyblock-section-actualites .anim_scale2')

        const timeline = gsap.timeline({
            defaults: { duration: 1, ease: 'expo.out' },
            scrollTrigger: { trigger: block, start: 'top center' }
        })
        const timelineBtn = gsap.timeline({
            defaults: { duration: 0.4, ease: 'expo.out' },
            scrollTrigger: { trigger: blockBtn }
        })

        timeline
            .to(block.querySelector('.anim_opacity'), { opacity: 1 }, 0)
            .to(block.querySelector('.anim_title'), { y: 0, opacity: 1, rotate: 0 }, 0.1)
            .to(block.querySelectorAll('.anim_overlay'), { scaleY: 0, stagger: 0.15 }, 0.2)
            .to(block.querySelectorAll('.anim_scale'), { scale: 1, opacity: 1, stagger: 0.15 }, 0.2)
            .to(block.querySelectorAll('.anim_opacity2'), { opacity: 1 }, 0.4)

        timelineBtn.to(blockBtn, { scale: 1, opacity: 1 })
    }

    temoignages() {
        const block = document.querySelector('.wp-block-lazyblock-section-temoignages')

        const timeline = gsap.timeline({
            defaults: { duration: 1, ease: 'expo.out' },
            scrollTrigger: { trigger: block, start: 'top center' }
        })

        timeline
            .to(block.querySelector('.anim_opacity'), { opacity: 1 }, 0)
            .to(block.querySelector('.anim_title'), { y: 0, opacity: 1, rotate: 0 }, 0.1)
            .to(block.querySelector('.anim_people'), { opacity: 1 }, 0.2)
            .to(block.querySelector('.anim_people'), { y: 0, scale: 1, duration: 3, ease: 'expo.out' }, 0.2)
            .to(block.querySelectorAll('.anim_scale'), { scale: 1, opacity: 1, stagger: 0.15 }, 0.2)
    }
}