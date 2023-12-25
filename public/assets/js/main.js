let about = document.querySelector(".about");
let content = document.querySelector(".content");
let advantage = document.querySelector(".advantage");
let plan1 = document.querySelector(".plan-1");
let plan2 = document.querySelector(".plan-2");

window.addEventListener("scroll", () => {
  let scrollTop = document.documentElement.scrollTop;
  let percent = (scrollTop / 4183) * 100;
  if (percent > 13) {
    about.classList.add("animation");
  }
  if (percent > 32.5) {
    content.classList.add("animation");
  }
  if (percent > 48) {
    advantage.classList.add("animation");
  }
  if (percent > 75) {
    plan1.classList.add("animation");
    plan2.classList.add("animation");
  }
});

let plansButton = document.querySelectorAll(".go-to-plans");

plansButton.forEach((button) => {
  button.addEventListener("click", () => {
    window.location.href = `plans`;
  });
});

let toggleMenu = document.querySelector(".toggle-menu");

let menu = document.querySelector(".links");
toggleMenu.addEventListener("click", () => {
  menu.classList.toggle("display");
});
