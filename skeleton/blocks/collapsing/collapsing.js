import { Expander } from '../expander/Expander'

document.addEventListener('DOMContentLoaded', () => {
    const expanderInstance = new Expander({
        selectors: {
            expander: '.collapsing',
            toggle: '.collapsing-button',
            toggleText: '.collapsing-button-text',
            hidden: '.collapsing-subtext'
        },
        classes: {
            opened: 'collapsing_expand',
            unset: 'collapsing_unset'
        },
        text: {
            expanded: 'Свернуть',
            collapsed: 'Читать полностью',
            collapsedValueFromElement: false
        },
        _delta: 20,
        minHeight: 180
    });

    const activeButton = document.querySelectorAll('.collapsing-button');

    activeButton.forEach(button => {
        button.addEventListener('click' , () => {
            button.classList.toggle('active');
        });
    });
});
