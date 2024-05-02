const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".sign-up");
const sign_in_btn2 = document.querySelector("#sign-in-btn2");
const sign_up_btn2 = document.querySelector("#sign-up-btn2");
const navSignIn = document.getElementById("nav-sign-in");
const navSignUp = document.getElementById("nav-sign-up");
sign_in_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
    navSignIn.classList.add("active");
    navSignUp.classList.remove("active");
});
sign_up_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
    navSignIn.classList.remove("active");
    navSignUp.classList.add("active");
});
sign_in_btn2.addEventListener("click", () => {
    container.classList.add("sign-up-mode2");
    navSignIn.classList.add("active");
    navSignUp.classList.remove("active");
});
sign_up_btn2.addEventListener("click", () => {
    container.classList.remove("sign-up-mode2");
    navSignIn.classList.remove("active");
    navSignUp.classList.add("active");
});

