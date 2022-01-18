const body = document.body;
const menuButton = document.querySelector(".menu-but")
const page = document.querySelector(".page-container")
const pageCover = document.querySelector(".page-cover")
const line1 = document.querySelector("#line-1")
const line2 = document.querySelector("#line-2")
const line3 = document.querySelector("#line-3")
let activeMenu = false


menuButton.addEventListener("click", function() {
  if (activeMenu === false) {
    body.classList.remove("menu-non-active")
    body.classList.add("menu-active")
    line1.style.animation = "line-key-1-f 450ms forwards"
    line2.style.animation = "line-key-2-f 450ms forwards"
    line3.style.animation = "line-key-3-f 450ms forwards"
    pageCover.style.display = "block"
    activeMenu = true
  } else if (activeMenu === true) {
    body.classList.remove("menu-active")
    body.classList.add("menu-non-active")
    line1.style.animation = "line-key-1-b 450ms forwards"
    line2.style.animation = "line-key-2-b 450ms forwards"
    line3.style.animation = "line-key-3-b 450ms forwards"
    pageCover.style.display = "none"
    activeMenu = false
  }
})
