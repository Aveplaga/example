import { Expander } from '../expander/Expander'

const expanderInstance = new Expander({
    selectors: {
        expander: '.expander',
        toggle: '.expander__toggle',
        toggleText: '.expander__toggle-text',
        hidden: '.expander-hidden'
    },
    classes: {
        opened: 'expander_expand', 
        unset: 'expander_unset'    
    },
    text: {
        expanded: 'Свернуть',
        collapsed: 'Читать полностью',
        collapsedValueFromElement: false
    },
    _delta: 20,
    minHeight: 180
})