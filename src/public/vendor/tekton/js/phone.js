new Cleave('.tekton-phone', {
    phone: true
});

let phones = Sizzle('.tekton-phone');
let focus = Array.prototype.filter.call(phones, (phone) => {
    phone.addEventListener('focus', (e) => {
        if (phone.value.length === 0 || phone.value[0] !== '+') {
            phone.value = '+62';
        }
    });
});