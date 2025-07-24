import { Expander } from '../expander/Expander'

const expanderInstance = new Expander({
    selectors: {
        expander: '.task-text',
        toggle: '.task__toggle',
        toggleText: '.task__toggle-text',
        hidden: '.task-content'
    },
    classes: {
        opened: 'task-content_expand', 
        unset: 'task-content_unset'    
    },
    text: {
        expanded: 'Свернуть',
        collapsed: 'Читать полностью',
        collapsedValueFromElement: false
    },
    _delta: 20,
    minHeight: 180
})