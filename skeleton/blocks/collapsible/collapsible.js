import { Expander } from '../expander/Expander'

const expanderInstance = new Expander({
    selectors: {
        expander: '.collapsible',
        toggle: '.collapsible__toggle',
        toggleText: '.collapsible__toggle-text',
        hidden: '.collapsible-hidden'
    },
    classes: {
        opened: 'collapsible_expand', 
        unset: 'collapsible_unset'    
    },
    text: {
        expanded: 'Свернуть',
        collapsed: 'Читать полностью',
        collapsedValueFromElement: false
    },
    _delta: 20,
    minHeight: 180
})