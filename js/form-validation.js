const contactForm = document.querySelector(".contact-form")
const formName = document.querySelector("#f-name")
const formEmail = document.querySelector("#f-email")
const formPhone = document.querySelector("#f-phone")
const formSubject = document.querySelector("#f-subject")
const formMessage = document.querySelector("#f-message")
const formSubmit = document.querySelector(".f-submit")
const emailValidator = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

let fNameCounter = false
let fEmailCounter = false
let fNumCounter = false
let fSubCounter = false
let fMesCounter = false

// Prevents Reload on Submit
function handleForm(event) { event.preventDefault(); }
contactForm.addEventListener('submit', handleForm);

// Submit Function
formSubmit.addEventListener("click", function(){
  nameFunction()
  emailFunction()
  phoneFunction()
  messageFunction()
  subjectFunction()
})

// Name Validation
function nameFunction(){
  if(formName.value == ""){
    formName.style.border = "1px solid red"
    let fnameCounter = false
  } else {
    formName.style.border = "1px solid #d2d2d2"
    let fnameCounter = true
  }
}

// Email Function
function emailFunction(){
  if (formEmail.value == "" || emailValidator.test(formEmail.value) == false){
    formEmail.style.border = "1px solid red"
    fEmailCounter = false
  } else {
    formEmail.style.border = "1px solid #d2d2d2"
    fEmailCounter = true
  }
}

// Phone Function
function phoneFunction(){
  if (formPhone.value == ""){
    formPhone.style.border = "1px solid red"
    fNumCounter = false
  } else {
    formPhone.style.border = "1px solid #d2d2d2"
    fNumCounter = true
  }
}

// subject Validation
function subjectFunction(){
  if(formSubject.value == ""){
    formSubject.style.border = "1px solid red"
    fSubCounter = false
  } else {
    formSubject.style.border = "1px solid #d2d2d2"
    fSubCounter = true
  }
}

// Message Validation
function messageFunction(){
  if(formMessage.value == ""){
    formMessage.style.border = "1px solid red"
    fMesCounter = false
  } else {
    formMessage.style.border = "1px solid #d2d2d2"
    fMesCounter = true
  }
}


// Empty Input Red border
// formName.addEventListener("keydown", function(event){
//   if (event.key == "backspace"){
//     formName.style.border = "1px solid red"
//   }
// })
