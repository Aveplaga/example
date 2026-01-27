import './homepage.sass';

// Подключение блоков
import '../../hero/hero.mustache';
import '../../advantages/advantages.mustache';
import '../../offers/offers.mustache';
import '../../logistics/logistics.mustache';
import '../../calculator/calculator.mustache';
import '../../solutions/solutions.mustache';
import '../../cases/cases.mustache';
import '../../about/about.mustache';
import '../../questions/questions.mustache';
import '../../feedback/feedback.mustache';

import '../../offers/offers.js';
import '../../logistics/logistics.js';
import '../../cases/cases.js';
import '../../about/about.js';
import '../../questions/questions.js';
import '../../feedback/feedback.js';


// Анимация при появлении контента
document.addEventListener('DOMContentLoaded', () => {
    const options = {
        root: null,
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                entry.target.classList.remove('visible');
            }
        });
    }, options);

    const targets = document.querySelectorAll('.fade');
    targets.forEach(target => observer.observe(target));
});

