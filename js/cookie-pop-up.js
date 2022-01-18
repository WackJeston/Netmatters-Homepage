const container = document.querySelector(".cookie-container")
const settings = document.querySelector(".cookie-settings")
const changeSettings = document.querySelector(".cookie-cs")
const acceptCookies = document.querySelector(".cookie-ac")
const cancel = document.querySelector(".cancel-cs")
const accept = document.querySelector(".accept-cs")

$(document).ready(function() {
  let counter = localStorage.getItem('counter');
  if (counter == null) {
    console.log("Setting Cookie Local Storage to 1")
    localStorage.setItem('counter', 1);
    container.style.display = "block"
  }
});

acceptCookies.addEventListener("click", function() {
  container.style.display = "none"
})

changeSettings.addEventListener("click", function() {
  settings.style.display = "block"
})

cancel.addEventListener("click", function() {
  settings.style.display = "none"
})

accept.addEventListener("click", function() {
  settings.style.display = "none"
})
