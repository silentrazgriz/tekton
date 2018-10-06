// Validation
let cleaves = [];

$('.needs-validation').each((form) => {
    form.addEventListener('submit', (event) => {
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            cleaves.forEach((item) => {
                item.element.value = item.getRawValue();
            });
        }
        form.classList.add('was-validated');
    });
});