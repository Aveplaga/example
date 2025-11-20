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
    });

    const itemColorActive = document.querySelectorAll('.questions-item');

    itemColorActive.forEach(item => {
        const subtitleColorActive = item.querySelector('.questions-subtitle');
        const buttonActive = item.querySelector('.questions-button');
        
        buttonActive.addEventListener('click' , (e) => {
            e.preventDefault();

            const active = buttonActive.classList.contains('active');

            itemColorActive.forEach(i => {
                i.querySelector('.questions-subtitle').classList.remove('active');
                i.querySelector('.questions-button').classList.remove('active');
            });

            if(!active){
                subtitleColorActive.classList.add('active');
                buttonActive.classList.add('active');
            }
        });
    });
});
