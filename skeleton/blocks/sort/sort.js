import { Dropdown } from '../dropdown/Dropdown'

const sortDropdown = new Dropdown({
	selectors: {
		dropdown: '.sort',              
		current: '.sort-button',        
		currentText: '.sort-value',     
		value: '.sort-link'             
	},
	defaultCurrentText: 'Сортировать:', 
	oneOpen: true,                      
	multiple: false, 
});

const colorActive = document.querySelectorAll('.sort-link');

colorActive.forEach(color => {
    color.addEventListener('click' , (e) => {
        e.preventDefault();

        colorActive.forEach(i => i.classList.remove('active'));
        color.classList.add('active');

        const sortValue = color.closest('.sort').querySelector('.sort-value');
        sortValue.textContent = color.textContent;
    });
})