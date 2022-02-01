const emailSignup = document.querySelector("#email-signup")
const userName = document.querySelector("#user-name")
const userEmail = document.querySelector("#user-email")
const userMarketing = document.querySelector("#user-marketing")
const userSubmit = document.querySelector("#user-submit")


let userNameCounter = false
let userEmailCounter = false
let userMarketingCounter = false

userSubmit.addEventListener("click", function(){
  userNameFunction()
  userEmailFunction()
  userMarketingFunction()
})

// Name Validation
function userNameFunction(){
  if(userName.value == ""){
    userName.style.border = "1px solid red"
    userNameCounter = false
  } else {
    userName.style.border = "1px solid #d2d2d2"
    userNameCounter = true
  }
}

// Email Function
function userEmailFunction(){
  if (userEmail.value == "" || emailValidator.test(userEmail.value) == false){
    userEmail.style.border = "1px solid red"
    userEmailCounter = false
  } else {
    userEmail.style.border = "1px solid #d2d2d2"
    userEmailCounter = true
  }
}

function userMarketingFunction(){
  if (userMarketing.value == ""){
    userMarketing.style.border = "1px solid red"
    userEmailCounter = false
  } else {
    userMarketing.style.border = "1px solid #d2d2d2"
    userEmailCounter = true
  }
}
