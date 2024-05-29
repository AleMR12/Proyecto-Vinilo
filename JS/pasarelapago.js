function formatCreditCardNumber(input) {
    let value = input.value.replace(/\D/g, '');
    value = value.replace(/(\d{4})/g, '$1-').substr(0, 19);
    input.value = value;
}

function formatExpirationDate(input) {
    let value = input.value.replace(/\D/g, '');
    value = value.replace(/(\d{2})(\d{2})/, '$1/$2').substr(0, 5);
    input.value = value;
}

function formatCVV(input) {
    let value = input.value.replace(/\D/g, '');
    input.value = value.substr(0, 3);
}