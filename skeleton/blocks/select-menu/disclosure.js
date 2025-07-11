import { Dropdown } from '../dropdown/Dropdown';

const sortDropdown = new Dropdown({
  selectors: {
    dropdown: '.disclosure',
    current: '.disclosure-current',
    currentText: '.disclosure-current__value', 
    value: '.disclosure__value'
  },
  classes: {
    dropdownExpand: 'disclosure_expand',
    valueSelected: 'disclosure__value_selected',
  },
  defaultCurrentText: 'Выберите элемент',
  animationSpeed: 400,
  oneOpen: true,
  multiple: false,
});
