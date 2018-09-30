let cleaveMoneys = [];

let tektonMoneys = Sizzle('.tekton-money');
tektonMoneys.forEach((money) => {
    cleaveMoneys.push(new Cleave(money, {
        numeral: true,
        numeralDecimalMark: ',',
        delimiter: '.'
    }));
});