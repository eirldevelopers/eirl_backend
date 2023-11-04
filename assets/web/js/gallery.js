let gallery_images = document.querySelectorAll(".gallery-img");
let gallery_close = document.querySelector(".gallery-active-btn");
let prev_btn = document.querySelector(".gallery-prev-btn");
let next_btn = document.querySelector(".gallery-next-btn");
let currentImage;

function remove_class() {
    gallery_images.forEach(img => {
        img.classList.remove("gallery-active");
        img.classList.add("gallery-img");
    });
}

gallery_images.forEach(img => {
    img.addEventListener("click", function(event) {
        remove_class();
        gallery_close.classList.add("btn-hide");
        next_btn.classList.add("btn-hide");
        prev_btn.classList.add("btn-hide");
        img.classList.remove("gallery-img");
        img.classList.add("gallery-active");
        let currentsrc = String(String(img.children[0].src).split("/").splice(-1)).split(".")[0]
        currentImage = img;
        let dataValue = Number(img.children[0].getAttribute("data-value"));

        prev_btn.addEventListener("click", function(event) {
            let new_num = dataValue - 1;
            if (new_num >= 1) {
                currentImage.children[0].src = "./assets/images/gallery_img/" + new_num + ".png";
                next_btn.disabled = false; // Enable the "Next" button
            } else {
                prev_btn.disabled = true; // Disable the "Previous" button
            }
            dataValue = new_num;
        });

        next_btn.addEventListener("click", function(event) {
            let new_num = dataValue + 1;
            if (new_num <= gallery_images.length) {
                currentImage.children[0].src = "./assets/images/gallery_img/" + new_num + ".png";
                prev_btn.disabled = false; // Enable the "Previous" button
            } else {
                next_btn.disabled = true; // Disable the "Next" button
            }
            dataValue = new_num;
        });

        gallery_close.addEventListener("click", function(event) {
            // gallery_close.classList.remove("btn-hide");
            // next_btn.classList.remove("btn-hide");
            // prev_btn.classList.remove("btn-hide");
            // currentImage.children[0].src = "./assets/images/gallery_img/" + currentsrc + ".png";
            // remove_class();
            location.reload()
        });
    });
});
