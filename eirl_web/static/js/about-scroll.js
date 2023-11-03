const scrollers = document.querySelectorAll(".scroller")

if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    addAnimation()
}

function addAnimation() {
    scrollers.forEach(scroller => {
        scroller.setAttribute('data-animated', true)

        const scroller_inner = scroller.querySelector(".scroller-inner")
        const scroller_content = Array.from(scroller_inner.children)

        scroller_content.forEach(item => {
            const duplicatedItem = item.cloneNode(true)
            duplicatedItem.setAttribute('aria-hidden', true)
            scroller_inner.appendChild(duplicatedItem)
        })
    })
}