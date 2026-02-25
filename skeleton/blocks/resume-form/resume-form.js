document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.resume-form');

    const previewNameText = document.querySelector('.resume-preview__content--name .preview-text');
    const previewEmailText = document.querySelector('.resume-preview__content--email .preview-text');
    const previewNumberText = document.querySelector('.resume-preview__content--number .preview-text');
    const previewEducationText = document.querySelector('.resume-preview__content--education .preview-text');
    const previewExperienceText = document.querySelector('.resume-preview__content--experience .preview-text');
    const previewSkillsText = document.querySelector('.resume-preview__content--skills .preview-text');

    const phoneInput = form.querySelector('[name="number"]');
    const emailInput = form.querySelector('[name="email"]');

    function updatePreview() {
        previewNameText.textContent = form.querySelector('[name="fullName"]').value || '';
        previewEmailText.textContent = emailInput.value || '';
        previewNumberText.textContent = phoneInput.value || '';
        previewEducationText.textContent = form.querySelector('[name="education"]').value || '';
        previewExperienceText.textContent = form.querySelector('[name="experience"]').value || '';
        previewSkillsText.textContent = form.querySelector('[name="skills"]').value || '';
    }

    phoneInput.addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, '');
    });
    
    emailInput.addEventListener('input', function () {
        this.value = this.value.replace(/[^a-zA-Z0-9@._-]/g, '');
    });

    form.addEventListener('input', updatePreview);

    updatePreview();
});