const container = document.querySelector(".cookie-container")
const changeSettings = document.querySelector(".cookie-cs")
const acceptCookies = document.querySelector(".cookie-ac")

$(document).ready(function() {
  let counter = localStorage.getItem('counter');
  if (counter == null) {
    localStorage.setItem('counter', 1);
    container.style.display = "block"
  }
});

acceptCookies.addEventListener("click", function() {
  container.style.display = "none"
})
