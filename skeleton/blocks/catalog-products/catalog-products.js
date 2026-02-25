document.addEventListener("DOMContentLoaded", () => {
    const filterLinks = document.querySelectorAll(".catalog-products__content--link");
    const items = document.querySelectorAll(".catalog-products__item");

    filterLinks.forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault();

            const filter = link.dataset.filter;
            items.forEach(item => {
                if (filter === "Все") {
                    item.style.display = "block";
                } 
                else if (item.dataset.category === filter) {
                    item.style.display = "block";
                } 
                else {
                    item.style.display = "none";
                }
            });
        });
    });
});