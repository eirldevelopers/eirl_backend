let num = document.querySelector("#phone");
num.addEventListener('input', function (event) {
    let maxLength = 10;
    if (num.value.length > maxLength) {
        num.value = num.value.slice(0, maxLength);
    }
});