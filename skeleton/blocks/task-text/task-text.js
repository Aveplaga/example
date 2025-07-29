import { Expander } from '../expander/Expander'

export default () => {
    // todo: проверка, что элемент существует в DOM
    const expanderInstance = new Expander({
        selectors: {
            expander: '.task-text',
            toggle: '.task-toggle',
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
}

