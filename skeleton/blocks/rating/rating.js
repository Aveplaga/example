import { Expander } from '../expander/Expander'

export default () => {
    const wrapper = document.querySelector('.reviews__wrapper')
    const button = document.querySelector('.reviews__button')

    if (!wrapper || !button) return

    new Expander({
        selectors: {
            expander: '.reviews__wrapper',
            toggle: '.reviews__button',
            toggleText: '.reviews__button',
            hidden: '.reviews__item'
        },
        classes: {
            opened: 'reviews__wrapper_expand',
            unset: 'reviews__wrapper_unset'
        },
        text: {
            expanded: 'Свернуть',
            collapsed: 'Показать ещё',
            collapsedValueFromElement: false
        },
        _delta: 20,
        minHeight: 150
    })
}



const links = document.querySelectorAll('.rating__link');

links.forEach(link => {
    link.addEventListener('click', (i) => {
        i.preventDefault();

        links.forEach(x => x.classList.remove('active'));
        link.classList.add('active')
    })
})