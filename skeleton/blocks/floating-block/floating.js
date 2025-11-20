function activeColor(item, active = 'active') {
    item.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();

            item.forEach(i => i.classList.remove(active));
            link.classList.add(active);
        });
    });
}

activeColor(document.querySelectorAll('.floating-link'));
activeColor(document.querySelectorAll('.list-button'));
