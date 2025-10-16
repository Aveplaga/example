const mainImage = document.querySelector('.content__image-main');
document.querySelectorAll('.content__image-small').forEach(smallImg => {
    smallImg.addEventListener('click', (e) => {
        e.preventDefault();
        mainImage.src = smallImg.src;
    });
});

const colorItems = document.querySelectorAll('.content__color-item');

colorItems.forEach(item => {
    item.addEventListener('click', () => {
        colorItems.forEach(i => i.classList.remove('content__color-item--active'));
        item.classList.add('content__color-item--active');
    });
});

const value = document.querySelector('.counter-value');
const plus = document.querySelector('.plus');
const minus = document.querySelector('.minus');

let count = 1;

plus.addEventListener('click', () => {
    count++
    value.textContent = count;
});

minus.addEventListener('click', () => {
    if (count > 1) count--;
    value.textContent = count
});
