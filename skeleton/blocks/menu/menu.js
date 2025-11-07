import { Accordion } from '../accordion/Accordion'

document.addEventListener('DOMContentLoaded', () => {

    new Accordion({
        selectors: {
            accordion: '.menu',
            item: '.menu-item',
            trigger: '.menu-button',
            hidden: '.menu-list'
        },
        classes: {
            opened: 'menu-list_opened'
        },
        oneOpen: true,
        transitionDuration: 300,
        hideOnStart: false,
    });

    const arrow = document.querySelectorAll('.menu-button')

    arrow.forEach(btn => {
        btn.addEventListener('click' , () => {
            btn.classList.toggle('active')
        });
    });
});
