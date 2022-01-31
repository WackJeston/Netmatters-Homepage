const formInfoSection = document.querySelector(".hours-info")
const hiContent = document.querySelector(".hours-info")
const hiButton = document.querySelector(".hours-info-button")

let hiCounter = false

hiButton.addEventListener("click", function(){
  if (hiCounter == false){
    hiContent.style.display = "flex"
    hiContent.style.animation = "hours-info-appear 500ms forwards"
    hiCounter = true
  } else if (hiCounter == true){
    hiContent.style.animation = "hours-info-disappear 500ms forwards"
    setTimeout(function(){
      hiContent.style.display = "none"
    },500)
    hiCounter = false
  }
})
