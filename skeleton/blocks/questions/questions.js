import { Accordion } from '../accordion/Accordion'

document.addEventListener('DOMContentLoaded', () => {

    new Accordion({
        selectors: {
            accordion: '.questions',
            item: '.questions-item',
            trigger: '.questions-button',
            hidden: '.questions-hidden'
        },
        classes: {
            opened: 'questions-hidden_opened'
        },
        oneOpen: true,
        transitionDuration: 300
    })

    const items = document.querySelectorAll('.questions-item');

    items.forEach(item => {
        const activeBackground = item.querySelector('.questions-button');
        const activeColor = item.querySelector('.questions-text');

        activeBackground.addEventListener('click' , (e) => {
            e.preventDefault();

            items.forEach(i => {
                i.querySelector('.questions-button').classList.remove('active');
                i.querySelector('.questions-text').classList.remove('active');
            });

            activeBackground.classList.add('active');
            activeColor.classList.add('active');
        });
    });
});
