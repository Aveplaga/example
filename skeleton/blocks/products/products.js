import { Expander } from '../expander/Expander'

export default () => {
    const expanderInstance = new Expander({
        selectors: {
            expander: '.products-cards',
            toggle: '.products-button',
            toggleText: '.products-button',
            hidden: '.card'
        },
        classes: {
            opened: 'products-cards_expand',
            unset: 'products-cards_unset'
        },
        text: {
            expanded: 'Roll up',
            collapsed: 'Load more',
            collapsedValueFromElement: false
        },
        _delta: 20,
        minHeight: 1500
    })
}

const icon = document.querySelectorAll('.card-icon');
icon.forEach(icon =>{
    icon.addEventListener('click' , click => {
        click.stopPropagation();
        icon.classList.toggle('active');
    });
});