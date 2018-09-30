// Validation
let forms = Sizzle('.needs-validation');
forms.forEach((form) => {
    form.addEventListener('submit', (event) => {
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            getCleaveRawValue(cleaveMoneys);
            getCleaveRawValue(cleavePhones);
        }
        form.classList.add('was-validated');
    });
});

function getCleaveRawValue(collections) {
    collections.forEach((item) => {
        item.element.value = item.getRawValue();
    });
}