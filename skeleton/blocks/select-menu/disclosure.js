document.addEventListener("DOMContentLoaded", () => {
    const disclosure = document.querySelector(".disclosure");
    const button = disclosure.querySelector(".disclosure-button");

    button.addEventListener("click", () => {
        disclosure.classList.toggle("is-open");
    });
});
