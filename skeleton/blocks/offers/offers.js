import { AdaptiveAccordion } from '../accordion/AdaptiveAccordion';

document.addEventListener('DOMContentLoaded', () => {

    new AdaptiveAccordion({
        selectors: {
            accordion: '.offers',
            item: '.offers-item',
            trigger: '.offers-item__button',
            hidden: '.offers-item__content'
        },
        classes: {
            opened: 'offers-block_opened'
        },
        oneOpen: true,
        transitionDuration: 300,

        breakpoint: 767,
        minWidth: 0,
        maxWidth: 767,
    });

    const buttonActive = document.querySelectorAll('.offers-item__button');

    buttonActive.forEach(button => {
        button.addEventListener('click' , (e) => {
            const active = button.classList.contains('active');

            e.preventDefault();

            buttonActive.forEach(i => i.classList.remove('active'));
            if(!active){
                button.classList.add('active');
            }
        });
    });
});