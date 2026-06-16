import { Accordion } from '../accordion/Accordion';

document.addEventListener('DOMContentLoaded', () => {
    new Accordion({
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

    const originalButtonText = submitButton?.textContent.trim() || '{{resume__button-info}}';

    function updateButtonState() {
        if (!submitButton || !consentCheckbox) return;
        
        if (consentCheckbox.checked) {
            submitButton.classList.add('active');
            submitButton.disabled = false;
            submitButton.textContent = 'Скачать резюме';
        } else {
            submitButton.classList.remove('active');
            submitButton.disabled = true;
            submitButton.textContent = originalButtonText;
        }
    }

    function getResumeData() {
        const data = {};
        document.querySelectorAll('.accrodion__input').forEach(input => {
            const label = input.closest('.resume__accrodion-item')?.querySelector('.accrodion__label');
            if (label && input.value) {
                const key = label.textContent.replace('*', '').trim().toLowerCase();
                data[key] = input.value;
            }
        });
        return data;
    }

    function generatePDFContent(data) {
        const sections = {
            personal: {
                title: 'Личные данные',
                fields: [
                    { key: 'фамилия', label: 'Фамилия' },
                    { key: 'имя', label: 'Имя' },
                    { key: 'отчество', label: 'Отчество' },
                    { key: 'телефон', label: 'Телефон' },
                    { key: 'e-mail', label: 'E-mail' },
                    { key: 'должность', label: 'Должность' }
                ]
            },
            education: {
                title: 'Образование',
                fields: [
                    { key: 'учебное заведение', label: 'Учебное заведение' },
                    { key: 'факультет', label: 'Факультет' },
                    { key: 'специальность', label: 'Специальность' },
                    { key: 'год окончания обучения', label: 'Год окончания' },
                    { key: 'форма обучения', label: 'Форма обучения' }
                ]
            },
            skills: {
                title: 'Навыки',
                fields: [
                    { key: 'профессиональные навыки', label: 'Профессиональные навыки' },
                    { key: 'языки программирования', label: 'Языки программирования' },
                    { key: 'инструменты и технологии', label: 'Инструменты и технологии' },
                    { key: 'иностранные языки', label: 'Иностранные языки' },
                    { key: 'дополнительные навыки', label: 'Дополнительные навыки' }
                ]
            }
        };

        let html = `<div style="font-family: sans-serif; padding: 20px;">`;
        html += `<h1 style="text-align: center; color: #1f2937; margin-bottom: 40px; font-size: 24px;">Резюме</h1>`;

        Object.values(sections).forEach(section => {
            const hasData = section.fields.some(f => data[f.key]);
            if (!hasData) return;

            html += `<div style="margin-bottom: 30px;">`;
            html += `<div style="font-size: 18px; font-weight: 600; color: #1f2937; margin-bottom: 15px; padding-bottom: 8px; border-bottom: 2px solid #FFA2B9;">${section.title}</div>`;
            
            section.fields.forEach(field => {
                if (data[field.key]) {
                    html += `
                        <div style="display: flex; justify-content: space-between; margin-bottom: 10px; font-size: 14px;">
                            <span style="color: #6b7280; font-weight: 500;">${field.label}</span>
                            <span style="color: #1f2937; font-weight: 600; text-align: right; max-width: 60%;">${data[field.key]}</span>
                        </div>
                    `;
                }
            });
            html += `</div>`;
        });

        html += `</div>`;
        return html;
    }

    async function downloadPDF() {
        if (typeof html2pdf === 'undefined') {
            await new Promise((resolve, reject) => {
                const script = document.createElement('script');
                script.src = 'https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js';
                script.onload = resolve;
                script.onerror = reject;
                document.head.appendChild(script);
            });
        }

        const data = getResumeData();
        const content = generatePDFContent(data);
        
        const tempDiv = document.createElement('div');
        tempDiv.id = 'resume-pdf-template';
        tempDiv.style.position = 'absolute';
        tempDiv.style.left = '-9999px';
        tempDiv.style.width = '794px';
        tempDiv.style.background = '#fff';
        tempDiv.innerHTML = content;
        document.body.appendChild(tempDiv);

        const opt = {
            margin: 10,
            filename: `resume_${data['фамилия'] || 'candidate'}.pdf`,
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2, useCORS: true },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        };

        try {
            submitButton.disabled = true;
            submitButton.textContent = 'Скачивание';
            
            await html2pdf().set(opt).from(tempDiv).save();
            
            setTimeout(() => {
                submitButton.textContent = 'Скачано';
                setTimeout(() => updateButtonState(), 2000);
            }, 500);
        } catch (err) {
            console.error('PDF error:', err);
            alert('Ошибка при создании PDF. Попробуйте ещё раз.');
            updateButtonState();
        } finally {
            tempDiv.remove();
        }
    }

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
            'фамилия': 'lastname', 'имя': 'firstname', 'отчество': 'patronymic',
            'телефон': 'phone', 'e-mail': 'email', 'должность': 'position',
            'учебное заведение': 'university', 'факультет': 'faculty', 'специальность': 'specialty',
            'год окончания обучения': 'graduation_year', 'форма обучения': 'study_form',
            'профессиональные навыки': 'professional_skills', 'языки программирования': 'programming_languages',
            'инструменты и технологии': 'tools_technologies', 'иностранные языки': 'foreign_languages',
            'дополнительные навыки': 'additional_skills'
        };
        const fieldName = fieldMap[labelText];
        if (fieldName && previewContainer) {
            const previewField = previewContainer.querySelector(`[data-field="${fieldName}"]`);
            if (previewField) previewField.textContent = input.value || '';
        }
    }

    if (previewContainer) {
        initPreview();
        document.addEventListener('input', (e) => {
            if (e.target.classList.contains('accrodion__input')) updatePreview(e.target);
        });
    }

    if (consentCheckbox) {
        consentCheckbox.addEventListener('change', updateButtonState);
        updateButtonState();
    }

    if (submitButton) {
        submitButton.addEventListener('click', (e) => {
            e.preventDefault();
            if (consentCheckbox?.checked) {
                downloadPDF();
            }
        });
    }
});