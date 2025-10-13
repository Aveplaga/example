const colorItems = document.querySelectorAll('.content__color-item');

colorItems.forEach(item => {
    item.addEventListener('click', () => {
        colorItems.forEach(i => i.classList.remove('content__color-item--active'));
        item.classList.add('content__color-item--active');
    });
});





