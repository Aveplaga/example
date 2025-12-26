import { Accordion } from '../accordion/Accordion'

document.addEventListener('DOMContentLoaded', () => {

    new Accordion({
        selectors: {
            accordion: '.questions',
            item: '.questions-item',
            trigger: '.questions-content_button',
            hidden: '.questions-content_text'
        },
        classes: {
            opened: 'questions-hidden_opened'
        },
        oneOpen: true,
        transitionDuration: 300,
        breakpoint: 767,
        minWidth: 0,
        maxWidth: 767,
    });

    const buttonArrows = document.querySelectorAll('.questions-content_button');

    buttonArrows.forEach(buttonArrow => {
        const item = buttonArrow.closest('.questions-item');
        const textActive = item.querySelector('.questions-content_title');

        buttonArrow.addEventListener('click', (e) => {
            e.preventDefault();

            const active = buttonArrow.classList.contains('active');

            document.querySelectorAll('.questions-item').forEach(i => {
                i.querySelector('.questions-content_title').classList.remove('active');
                i.querySelector('.questions-content_button').classList.remove('active');
            });

            if (!active) {
                textActive.classList.add('active');
                buttonArrow.classList.add('active');
            }
        });
    });

});