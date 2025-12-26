import { AdaptiveAccordion } from '../accordion/AdaptiveAccordion';

document.addEventListener('DOMContentLoaded', () => {

    new AdaptiveAccordion({
        selectors: {
            accordion: '.services',
            item: '.services-card',
            trigger: '.card-button',
            hidden: '.card-block'
        },
        classes: {
            opened: 'block_opened'
        },
        oneOpen: true,
        transitionDuration: 300,

        breakpoint: 767,
        minWidth: 0,
        maxWidth: 767,
    });

    const arrows = document.querySelectorAll('.card-button');
    arrows.forEach(arrow => {
        arrow.addEventListener('click', (e) => {
            const active = arrow.classList.contains('active')
            e.preventDefault();

            arrows.forEach(i => i.classList.remove('active'));
            if (!active) {
                arrow.classList.add('active')
            }
        });
    });
});