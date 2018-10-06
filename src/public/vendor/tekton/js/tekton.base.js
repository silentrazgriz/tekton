// Validation
let cleaves = [];

$('.needs-validation').each(() => {
    $(this).on('submit', (event) => {
        if ($(this).checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            cleaves.forEach((item) => {
                item.element.value = item.getRawValue();
            });
        }
        $(this).addClass('was-validated');
    });
});