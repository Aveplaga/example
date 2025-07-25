import '../../task-slider/task-slider.js';
import taskDuo from "../../task-duo/task-duo";
import taskText from "../../task-text/task-text";
import '../../task-viewed/task-viewed.js';

import './test-task.scss';

document.addEventListener('DOMContentLoaded', () => {
  taskDuo()
  taskText()
})