import { Dropdown } from '../dropdown/Dropdown'

document.addEventListener('DOMContentLoaded', () => {
    const sortDropdown = new Dropdown({
        selectors: {
            dropdown: '.sorting',
            current: '.dropdown-button',
            currentText: '.dropdown-value',
            value: '.dropdown-link'
        },
        defaultCurrentText: 'Сортировать:',
        oneOpen: true,
        multiple: false,
    });

    const colorLinkActive = document.querySelectorAll('.dropdown-link');

    colorLinkActive.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();

            colorLinkActive.forEach(i => i.classList.remove('active'));
            link.classList.add('active');

            const sortingValue = link.closest('.sorting').querySelector('.dropdown-value');
            sortingValue.textContent = link.textContent;
        });
    });
});