import { Accordion } from '../accordion/Accordion'

document.addEventListener('DOMContentLoaded', () => {

    new Accordion({
        selectors: {
            accordion: '.form__dropdown',
            item: '.dropdown__item',
            trigger: '.dropdown__button',
            hidden: '.form__dropdown-container'
        },
        classes: {
            opened: 'dropdown__hidden-opened'
        },
        oneOpen: true,
        transitionDuration: 500
    });
});