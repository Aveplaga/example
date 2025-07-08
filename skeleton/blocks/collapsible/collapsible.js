document.addEventListener('DOMContentLoaded', () => {
  const content = document.querySelector('.expand-content');
  const button = document.querySelector('.expand-toggle');
  const maxHeight = 180;
  const delta = 10;

  if (!content || !button) return;

  if (content.scrollHeight <= maxHeight + delta) {
    content.classList.add('unset');
    button.hidden = true;
    return;
  }

  button.addEventListener('click', () => {
    const expanded = content.classList.toggle('expanded');
    button.classList.toggle('active', expanded);
    button.firstChild.textContent = expanded ? 'Скрыть ' : 'Читать полностью ';
  });
});
