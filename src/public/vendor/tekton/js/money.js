$('.tekton-money').each((money) => {
    cleaves.push(new Cleave(money, {
        numeral: true,
        numeralDecimalMark: ',',
        delimiter: '.'
    }));
});