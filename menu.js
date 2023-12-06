const header = document.querySelector("header");
const logo = document.querySelector("#logo-img");

window.addEventListener("scroll", diminuiHeader);

function diminuiHeader() {
    if (window.pageYOffset > 0 && header.classList.contains("max")) {
        header.classList.remove("max");
        header.classList.add("min");
    } else if(window.pageYOffset == 0 && header.classList.contains("min")) {
        header.classList.add("max");
        header.classList.remove("min");

    }
}

window.addEventListener("scroll", function() {
    let header = this.document.querySelector('#header')
    header.classList.toggle('rolagem', window.scrollY < 0)
})