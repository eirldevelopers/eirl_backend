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
            const base_url = document.querySelector('.gallery-img img').getAttribute('data-base-url');
            if (new_num >= 1) {
                currentImage.children[0].src = base_url + new_num + ".png";
                next_btn.disabled = false;
            } else {
                prev_btn.disabled = true;
            }
            dataValue = new_num;
        });

        next_btn.addEventListener("click", function(event) {
            let new_num = dataValue + 1;
            const base_url = document.querySelector('.gallery-img img').getAttribute('data-base-url');
            if (new_num <= gallery_images.length) {
                currentImage.children[0].src = base_url + new_num + ".png";
                prev_btn.disabled = false;
            } else {
                next_btn.disabled = true;
            }
            dataValue = new_num;
        });

        gallery_close.addEventListener("click", function(event) {
            location.reload()
        });
    });
});
