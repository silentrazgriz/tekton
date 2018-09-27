new Cleave('.tekton-phone', {
    phone: true
});

let tektonPhones = Sizzle('.tekton-phone');
Array.prototype.filter.call(tektonPhones, (phone) => {
    phone.addEventListener('focus', (e) => {
        if (phone.value.length === 0 || phone.value[0] !== '+') {
            phone.value = '+62';
        }
    });
});