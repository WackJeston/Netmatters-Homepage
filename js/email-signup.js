const emailSignup = document.querySelector("#email-signup")
const userName = document.querySelector("#user-name")
const userEmail = document.querySelector("#user-email")
const userMarketing = document.querySelector("#user-marketing")
const userSubmit = document.querySelector("#user-submit")

let userNameCounter = false
let userEmailCounter = false

userSubmit.addEventListener("click", function(){
  userNameFunction()
  userEmailFunction()


  if (userNameCounter == false || userEmailCounter == false){
    function handleForm(event) { event.preventDefault(); }
    emailSignup.addEventListener('submit', handleForm);
  }
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
