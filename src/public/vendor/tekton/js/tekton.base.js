// Validation
let forms = Sizzle('.needs-validation');
let validation = Array.prototype.filter.call(forms, (form) => {
    form.addEventListener('submit', (event) => {
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });
});
