import { Accordion } from '../accordion/Accordion'

document.addEventListener('DOMContentLoaded', () => {

    new Accordion({
        selectors: {
            accordion: '.questions',
            item: '.questions-item',
            trigger: '.questions-content__button',
            hidden: '.questions-item__subtitle'
        },
        classes: {
            opened: 'questions-block__opened'
        },
        oneOpen: true,
        transitionDuration: 300,
    });

    const buttonArrows = document.querySelectorAll('.questions-content__button');

    buttonArrows.forEach(buttonArrow => {
        const item = buttonArrow.closest('.questions-item');
        const textActive = item.querySelector('.questions-content__title');

        buttonArrow.addEventListener('click', (e) => {
            e.preventDefault();

            const active = buttonArrow.classList.contains('active');

            document.querySelectorAll('.questions-item').forEach(i => {
                i.querySelector('.questions-content__title').classList.remove('active');
                i.querySelector('.questions-content__button').classList.remove('active');
            });

            if (!active) {
                textActive.classList.add('active');
                buttonArrow.classList.add('active');
            }
        });
    });

});