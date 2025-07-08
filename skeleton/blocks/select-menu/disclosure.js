document.addEventListener('DOMContentLoaded', () => {
  const disclosure = document.querySelector('.disclosure');
  if (!disclosure) return;

  const button = disclosure.querySelector('.disclosure-button');
  const meaning = disclosure.querySelector('.disclosure-meaning');
  const links = disclosure.querySelectorAll('.disclosure-link');

  button.addEventListener('click', () => {
    disclosure.classList.toggle('is-open');
  });

  links.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      meaning.textContent = link.textContent;
      links.forEach(l => l.classList.remove('active'));
      link.classList.add('active');
      disclosure.classList.remove('is-open');
    });
  });
});
