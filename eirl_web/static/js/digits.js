let number = document.querySelectorAll("#phone");

number.forEach(function(num) {
    num.addEventListener('input', function (event) {
        let maxLength = 10;
        if (num.value.length > maxLength) {
            num.value = num.value.slice(0, maxLength);
        }
    });
})

let job_number = document.querySelectorAll("#job_mobile");

job_number.forEach(function(num) {
    num.addEventListener('input', function (event) {
        let maxLength = 10;
        if (num.value.length > maxLength) {
            num.value = num.value.slice(0, maxLength);
        }
    });
})
