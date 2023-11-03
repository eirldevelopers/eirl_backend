let file_name = document.querySelector("#job_cv")
let span = document.querySelector(".file_name_class")
file_name.addEventListener("change", function(event){
    let name = String(file_name.value).split("\\").splice(-1)
    span.textContent = name
})