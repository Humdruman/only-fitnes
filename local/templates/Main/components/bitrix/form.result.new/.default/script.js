document.addEventListener('DOMContentLoaded', () => {
    $(".contact-form-inputs-text.phone").mask("+7(999) 999-9999");
    const form = document.getElementById('contact_form_1');
    if(!form) {
        return;
    }
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const data = new FormData(form)
        window.buex.dispatch('sendFeedbackForm', {
            name: data.get('form_text_1'),
            phone: data.get('form_text_2')
        })
    })
});