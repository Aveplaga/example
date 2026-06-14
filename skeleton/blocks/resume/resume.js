import { Accordion } from '../accordion/Accordion';

document.addEventListener('DOMContentLoaded', () => {
    const accordion = new Accordion({
        selectors: {
            accordion: '.resume__form',
            item: '.resume__item',
            trigger: '.resume__item-button',
            hidden: '.resume__accrodion'
        },
        classes: {
            opened: 'resume__opened'
        },
        oneOpen: true,
        transitionDuration: 500
    });

    const previewContainer = document.querySelector('.resume__preview');
    const form = document.querySelector('.resume__form');
    const consentCheckbox = document.querySelector('.resume__consent-checkbox');
    const submitButton = document.querySelector('.resume__button-submit');

    function initPreview() {
        if (!previewContainer) return;

        const previewHTML = `
            <div class="resume__preview-title">Предпросмотр резюме</div>
            <div class="resume__preview-content">
                <div class="resume__preview-section" data-section="personal">
                    <div class="resume__preview-section-title">Личные данные</div>
                    <div class="resume__preview-fields">
                        <div class="resume__preview-field"><div class="resume__preview-label">Фамилия</div><div class="resume__preview-value" data-field="lastname"></div></div>
                        <div class="resume__preview-field"><div class="resume__preview-label">Имя</div><div class="resume__preview-value" data-field="firstname"></div></div>
                        <div class="resume__preview-field"><div class="resume__preview-label">Отчество</div><div class="resume__preview-value" data-field="patronymic"></div></div>
                        <div class="resume__preview-field"><div class="resume__preview-label">Телефон</div><div class="resume__preview-value" data-field="phone"></div></div>
                        <div class="resume__preview-field"><div class="resume__preview-label">E-mail</div><div class="resume__preview-value" data-field="email"></div></div>
                        <div class="resume__preview-field"><div class="resume__preview-label">Должность</div><div class="resume__preview-value" data-field="position"></div></div>
                    </div>
                </div>

                <div class="resume__preview-section" data-section="education">
                    <div class="resume__preview-section-title">Образование</div>
                    <div class="resume__preview-fields">
                        <div class="resume__preview-field"><div class="resume__preview-label">Учебное заведение</div><div class="resume__preview-value" data-field="university"></div></div>
                        <div class="resume__preview-field"><div class="resume__preview-label">Факультет</div><div class="resume__preview-value" data-field="faculty"></div></div>
                        <div class="resume__preview-field"><div class="resume__preview-label">Специальность</div><div class="resume__preview-value" data-field="specialty"></div></div>
                        <div class="resume__preview-field"><div class="resume__preview-label">Год окончания</div><div class="resume__preview-value" data-field="graduation_year"></div></div>
                        <div class="resume__preview-field"><div class="resume__preview-label">Форма обучения</div><div class="resume__preview-value" data-field="study_form"></div></div>
                    </div>
                </div>

                <div class="resume__preview-section" data-section="skills">
                    <div class="resume__preview-section-title">Навыки</div>
                    <div class="resume__preview-fields">
                        <div class="resume__preview-field"><div class="resume__preview-label">Профессиональные навыки</div><div class="resume__preview-value" data-field="professional_skills"></div></div>
                        <div class="resume__preview-field"><div class="resume__preview-label">Языки программирования</div><div class="resume__preview-value" data-field="programming_languages"></div></div>
                        <div class="resume__preview-field"><div class="resume__preview-label">Инструменты и технологии</div><div class="resume__preview-value" data-field="tools_technologies"></div></div>
                        <div class="resume__preview-field"><div class="resume__preview-label">Иностранные языки</div><div class="resume__preview-value" data-field="foreign_languages"></div></div>
                        <div class="resume__preview-field"><div class="resume__preview-label">Дополнительные навыки</div><div class="resume__preview-value" data-field="additional_skills"></div></div>
                    </div>
                </div>
            </div>
        `;
        
        previewContainer.innerHTML = previewHTML;
    }

    function updatePreview(input) {
        const label = input.closest('.resume__accrodion-item')?.querySelector('.accrodion__label');
        if (!label) return;

        let labelText = label.textContent.replace('*', '').trim().toLowerCase();
        
        const fieldMap = {
            'фамилия': 'lastname',
            'имя': 'firstname',
            'отчество': 'patronymic',
            'телефон': 'phone',
            'e-mail': 'email',
            'должность': 'position',
            'учебное заведение': 'university',
            'факультет': 'faculty',
            'специальность': 'specialty',
            'год окончания обучения': 'graduation_year',
            'форма обучения': 'study_form',
            'профессиональные навыки': 'professional_skills',
            'языки программирования': 'programming_languages',
            'инструменты и технологии': 'tools_technologies',
            'иностранные языки': 'foreign_languages',
            'дополнительные навыки': 'additional_skills'
        };
        
        const fieldName = fieldMap[labelText];
        
        if (fieldName && previewContainer) {
            const previewField = previewContainer.querySelector(`[data-field="${fieldName}"]`);
            if (previewField) {
                previewField.textContent = input.value || '';
            }
        }
    }

    function toggleSubmitButton() {
        if (submitButton && consentCheckbox) {
            submitButton.disabled = !consentCheckbox.checked;
        }
    }

    if (previewContainer) {
        initPreview();
        
        document.addEventListener('input', (e) => {
            if (e.target.classList.contains('accrodion__input')) {
                updatePreview(e.target);
            }
        });
    }

    if (consentCheckbox) {
        consentCheckbox.addEventListener('change', toggleSubmitButton);
        toggleSubmitButton();
    }

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            if (consentCheckbox && !consentCheckbox.checked) {
                alert('Пожалуйста, примите условия конфиденциальности');
                consentCheckbox.focus();
                return;
            }
            
            const formData = {};
            document.querySelectorAll('.accrodion__input').forEach(input => {
                const label = input.closest('.resume__accrodion-item')?.querySelector('.accrodion__label');
                if (label) {
                    const key = label.textContent.replace('*', '').trim().toLowerCase();
                    formData[key] = input.value;
                }
            });
            
            console.log('Form submitted:', formData);
            alert('Резюме отправлено!');
        });
    }
});