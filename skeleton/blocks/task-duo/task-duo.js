export default function taskDuo() {
  document.querySelectorAll('.task-item__logo').forEach(logo => {
    logo.addEventListener('click', () => {
      logo.classList.toggle('active');
    });
  });
}
