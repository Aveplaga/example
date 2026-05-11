import { Accordion } from '../accordion/Accordion'

document.addEventListener('DOMContentLoaded', () => {

    new Accordion({
        selectors: {
            accordion: '.questions',
            item: '.questions__item',
            trigger: '.questions__button',
            hidden: '.questions__item-subtitle'
        },
        classes: {
            opened: 'questions__opened'
        },
        oneOpen: true,
        transitionDuration: 500
    });
});