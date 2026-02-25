import { Dropdown } from '../dropdown/Dropdown';

document.addEventListener('DOMContentLoaded', () => {
    new Dropdown({
        selectors: {
            dropdown: '.order-form__delivery',
            current: '.order-form__delivery--content',
            currentText: '.order-form__delivery--value',
            value: '.order-form__delivery--link'
        },
        defaultCurrentText: 'Выберите способ доставки:',
        oneOpen: true,
        multiple: false,
    });

    document.querySelectorAll('.order-form__delivery').forEach(delivery => {
        const btn = delivery.querySelector('.order-form__delivery--button');
        const list = delivery.querySelector('.order-form__delivery--list');
        const arrow = delivery.querySelector('.arrow');

        btn.addEventListener('click', e => {
            e.preventDefault();
            delivery.classList.toggle('dropdown_expand');
            list.style.maxHeight = delivery.classList.contains('dropdown_expand') ? list.scrollHeight + 'px' : '0';
            arrow.style.transform = delivery.classList.contains('dropdown_expand') ? 'rotate(180deg)' : 'rotate(0deg)';
        });
    });

    document.querySelectorAll('.order-form__delivery--link').forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            const block = link.closest('.order-form__delivery');
            block.querySelectorAll('.order-form__delivery--link').forEach(l => l.classList.remove('active'));
            link.classList.add('active');
            block.querySelector('.order-form__delivery--value').textContent = link.textContent;
            block.classList.remove('dropdown_expand');
            block.querySelector('.order-form__delivery--list').style.maxHeight = '0';
            block.querySelector('.arrow').style.transform = 'rotate(0deg)';
        });
    });

    const form = document.querySelector('form.order-form__content');
    const submitButton = document.querySelector('.order-form__content--button');

    const phoneInput = form.querySelector('.order-form__input--tel');
    const cardInput = form.querySelector('.order-form__input--number');
    const codeInput = form.querySelector('.order-form__input--');

    phoneInput.addEventListener('input', () => {
        phoneInput.value = phoneInput.value.replace(/\D/g, '');
    });

    cardInput.addEventListener('input', () => {
        cardInput.value = cardInput.value.replace(/\D/g, '').slice(0,16);
    });

    codeInput.addEventListener('input', () => {
        codeInput.value = codeInput.value.replace(/\D/g, '').slice(0,4);
    });

    submitButton.addEventListener('click', e => {
        e.preventDefault();
        const name = form.querySelector('.order-form__input--name').value.trim();
        const phone = phoneInput.value.trim();
        const address = form.querySelector('.order-form__input--adress').value.trim();
        const card = cardInput.value.trim();
        const code = codeInput.value.trim();

        if (!name || !address || !phone || !/^\d+$/.test(phone) || !/^\d{16}$/.test(card) || !/^\d{4}$/.test(code)) {
            alert('Заполните все поля корректно');
            return;
        }
        alert('Форма успешно заполнена!');
    });
});