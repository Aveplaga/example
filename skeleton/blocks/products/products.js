import { Expander } from '../expander/Expander'

export default () => {
    const expanderInstance = new Expander({
        selectors: {
            expander: '.products-cards',
            toggle: '.products-button',
            toggleText: '.products-button',
            hidden: '.card'
        },
        classes: {
            opened: 'products-cards_expand',
            unset: 'products-cards_unset'
        },
        text: {
            expanded: 'Roll up',
            collapsed: 'Load more',
            collapsedValueFromElement: false
        },
        _delta: 20,
        minHeight: 1500
    })
}


// пишем фильтрацию товаров
const links = document.querySelectorAll('.products-link');
const cards = document.querySelectorAll('.card');

links.forEach(link => {
    link.addEventListener('click', click => {
        click.preventDefault(); // отменяем стандартное поведение у ссылки 
        const category = link.textContent.toLowerCase(); // тут приводим к нижнему тексту , так как у меня он вверхний

        cards.forEach(card => { // пишем условие при котором будет работать сслыки и искать товары по категории
            if (category === 'all' || card.dataset.category === category) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});


