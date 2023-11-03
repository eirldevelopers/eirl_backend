let index_nav = document.querySelector(".ei-nav")
let index_mob_nav = document.querySelector(".mobile-logo")

window.addEventListener('scroll', () => {
    if (window.scrollY >= 300) {
        index_nav.classList.add("ei-nav-scrolled")
    }else if (window.scrollY < 300) {
    index_nav.classList.remove("ei-nav-scrolled")
}
})

window.addEventListener('scroll', () => {
    if (window.scrollY >= 20) {
        index_mob_nav.classList.add("mob-nav-scrolled")
    }else if (window.scrollY < 20) {
    index_mob_nav.classList.remove("mob-nav-scrolled")
}
})