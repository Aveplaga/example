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

    const activeMenuButton = document.querySelectorAll('.menu-button');

    activeMenuButton.forEach(button => {
        button.addEventListener('click' , () => {
            activeMenuButton.forEach(b => {
                if (b !== button) b.classList.remove('active');
            });
            button.classList.toggle('active')
        });
    });
});
