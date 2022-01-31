const container = document.querySelector(".cookie-container")
const settings = document.querySelector(".cookie-settings")
const changeSettings = document.querySelector(".cookie-cs")
const acceptCookies = document.querySelector(".cookie-ac")
const cancel = document.querySelector(".cancel-cs")
const accept = document.querySelector(".accept-cs")
const fcDisable = document.querySelector("#fc-disable")
const fcEnable = document.querySelector("#fc-enable")
const paDisable = document.querySelector("#pa-disable")
const paEnable = document.querySelector("#pa-enable")


$(document).ready(function() {
  let counter = localStorage.getItem('counter');
  if (counter == null) {
    container.style.display = "block"
  }
});


acceptCookies.addEventListener("click", function() {
  container.style.display = "none"
  localStorage.setItem('counter', 1);
})

changeSettings.addEventListener("click", function() {
  settings.style.display = "block"
})

cancel.addEventListener("click", function() {
  settings.style.display = "none"
})

accept.addEventListener("click", function() {
  settings.style.display = "none"
  container.style.display = "none"
  localStorage.setItem('counter', 1);
})


// fcDisable.addEventListener("click", function() {
//   fcDisable.classList.add("active-mode")
//   fcEnable.classList.add("non-active-mode")
// })
//
// fcEnable.addEventListener("click", function() {
//   fcEnable.classList.add("active-mode")
//   fcDisable.classList.add("non-active-mode")
// })
