import './homepage.sass';
import '../../services/services.mustache';
import '../../project/project.mustache';
import '../../news/news.mustache';
import '../../statistics/statistics.mustache';
import '../../customers/customers.mustache';


import '../../project/project.js';

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