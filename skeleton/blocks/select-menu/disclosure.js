import { Dropdown } from '../dropdown/Dropdown'

const sortDropdown = new Dropdown({
	selectors: {
		dropdown: '.dropdown',
		current: '.dropdown-current',
		currentText: '.dropdown-current__value',
		value: '.dropdown__value'
	},
	defaultCurrentText: '',
	oneOpen: true,
	multiple: false,

})
