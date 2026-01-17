import { Dropdown } from '../dropdown/Dropdown'

document.addEventListener('DOMContentLoaded', () => {
    const feedbackDropdown = new Dropdown({
        selectors: {
            dropdown: '.feedback-content__dropdown',
            current: '.feedback-dropdown__button',
            currentText: '.feedback-dropdown__value',
            value: '.feedback-dropdown__link'
        },
        defaultCurrentText: '',
        oneOpen: true,
        multiple: false,
    });

    const link = document.querySelectorAll('.feedback-dropdown__link');

    link.forEach(value => {
        value.addEventListener('click' , (e) => {
            e.preventDefault();

            link.forEach(i => i.classList.remove('active'));
            value.classList.add('active');

            const dropdown = value.closest('.feedback-content__dropdown');
            const dropdownTitle = dropdown.querySelector('.feedback-dropdown__title');
            dropdownTitle.textContent = value.textContent;
        });
    });
});