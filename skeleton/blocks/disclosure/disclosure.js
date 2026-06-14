import { Accordion } from '../accordion/Accordion';

document.addEventListener('DOMContentLoaded', () => {
    new Accordion({
        selectors: {
            accordion: '.disclosure__form',
            item: '.disclosure__item',
            trigger: '.disclosure__item-button',
            hidden: '.disclosure__accrodion'
        },
        classes: {
            opened: 'disclosure__opened'
        },
        oneOpen: true,
        transitionDuration: 500
    });
});