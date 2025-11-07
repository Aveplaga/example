import { Expander } from '../expander/Expander'

document.addEventListener('DOMContentLoaded', () => {
    const expanderInstance = new Expander({
        selectors: {
            expander: '.collapsing',
            toggle: '.collapsing-button',
            toggleText: '.collapsing-button-text',
            hidden: '.collapsing-hidden'
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

    const arrow = document.querySelectorAll('.collapsing-button');

    arrow.forEach(btn => {
        btn.addEventListener('click', () => {
            btn.classList.toggle('active');
        });
    });
});
