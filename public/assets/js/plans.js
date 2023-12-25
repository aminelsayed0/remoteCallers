let email = document.getElementById("email");
let submit = document.querySelector("#submit");
let numberInput = document.getElementById("number");
let fName = document.getElementById("f-name");
let lName = document.getElementById("l-name");
let phone = document.getElementById("phone");

submit.addEventListener("click", (e) => {
  if (fName.value == "") {
    fName.style.cssText = "border: 1px solid red;";
    e.preventDefault();
  }
  if (lName.value == "") {
    lName.style.cssText = "border: 1px solid red;";
    e.preventDefault();
  }
  if (phone.value == "") {
    phone.style.cssText = "border: 1px solid red;";
    e.preventDefault();
  }

  emailRe = /\w+@\w+.com/;
  if (emailRe.test(email.value) === false) {
    email.style.cssText = "border: 1px solid red;";
    e.preventDefault();
  }

  if (numberInput.value <= 0) {
    numberInput.style.cssText = "border: 1px solid red;";
    e.preventDefault();
  }
});

let toggleMenu = document.querySelector(".toggle-menu");

let menu = document.querySelector(".links");
toggleMenu.addEventListener("click", () => {
  menu.classList.toggle("display");
});
