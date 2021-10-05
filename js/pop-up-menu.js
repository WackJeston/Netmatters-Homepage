

const menuButton = document.querySelector(".menu-but")
const page = document.querySelector(".page-container")
let active = false

if (active === false) {
  menuButton.addEventListener("click", () => {
    body.style.transform = "translateX(-260px)"
    active = true
  })
}

if (active === true) {
  page.addEventListener("click", () => {
    body.style.transform = "translateX(0px)"
    active = false
  })
}
