document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('.catalog__top-link');
    filterButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();

            filterButtons.forEach(i => i.classList.remove('active'));
            btn.classList.add('active');

            const itemValue = btn.dataset.filter;
            const items = document.querySelectorAll('.catalog__item');

            items.forEach(item => {
                const itemRating = item.dataset.rating;

                if (itemValue === 'all' || itemRating === itemValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});