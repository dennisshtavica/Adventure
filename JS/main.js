/*==================== SHOW MENU ====================*/
const navMenu = document.getElementById("nav-menu"),
  navToggle = document.getElementById("nav-toggle"),
  navClose = document.getElementById("nav-close");

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("show-menu");
  });
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.remove("show-menu");
  });
}
/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll(".nav__link");

function linkAction() {
  const navMenu = document.getElementById("nav-menu");
  // When we click on each nav__link, we remove the show-menu class
  navMenu.classList.remove("show-menu");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));

/*==================== CHANGE BACKGROUND HEADER ====================*/
function scrollHeader() {
  const header = document.getElementById("header");
  // When the scroll is greater than 100 viewport height, add the scroll-header class to the header tag
  if (this.scrollY >= 50) header.classList.add("scroll-header");
  else header.classList.remove("scroll-header");
}
window.addEventListener("scroll", scrollHeader);

// SWIPER

let swiper = new Swiper(".destinations-swiper", {
  // cssMode: true,
  // centeredSlides: true,
  // slidesPerView: '3',
  // spaceBetween: -90,
  loop: "true",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  // mousewheel: true,
  keyboard: true,
});

/*==================== SCROLL REVEAL ANIMATION ====================*/
const sr = ScrollReveal({
  // distance: '60px',
  // duration: 2800,
  // // reset: true,
  origin: "top",
  // distance: "60px",
  duration: 1500,
  delay: 100,
});

sr.reveal(".nav");
sr.reveal(".home__container");

const sr2 = ScrollReveal({
  origin: "top",
  distance: "60px",
  duration: 1500,
  delay: 100,
  reset: true,
});
sr2.reveal(".cards");
sr2.reveal(".grid__cards");

const sr3 = ScrollReveal({
  reset: true,
  origin: "left",
  distance: "60px",
  duration: 1500,
  delay: 100,
});

sr3.reveal(".condition1");

const sr4 = ScrollReveal({
  reset: true,
  origin: "right",
  distance: "20px",
  duration: 1500,
  delay: 100,
});

sr4.reveal(".condition2");

// VALIDATE

function formValidation(formId, inputId, pattern) {
  const value = document.getElementById(inputId).value;
  const form = document.getElementById(formId);

  if (value.match(pattern)) {
    form.classList.add("success");
    form.classList.remove("error");
    return true;
  } else {
    form.classList.remove("success");
    form.classList.add("error");
    return false;
  }
}

function emailValidation() {
  const emailPattern =
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  formValidation("email-form", "email", emailPattern);
}

function passwordValidation() {
  const passPattern = /.{6}/;
  formValidation("pass-form", "pass", passPattern);
  confirmPassValidation();
}

function userValidation() {
  const userPattern = /.{6}/;
  formValidation("user-form", "user", userPattern);
}

function confirmPassValidation() {
  const pass = document.getElementById("pass").value;
  const confirmPass = document.getElementById("confirm-pass").value;
  const form = document.getElementById("confirm-pass-form");
  const pform = document.getElementById("pass-form");
  if (pass != "" && pass == confirmPass && pform.classList.contains("success")) {
    form.classList.add("success");
    form.classList.remove("error");
  } else {
    form.classList.remove("success");
    form.classList.add("error");
  }
}
