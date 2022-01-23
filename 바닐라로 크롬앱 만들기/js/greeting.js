const loginForm = document.querySelector("#login-form");
const loginInput = document.querySelector("#login-form input");
const greeting = document.querySelector("#greeting");

const HIDDEN_CLASS = "hidden";
const USERNAME_KEY = "username";
const savedName = localStorage.getItem(USERNAME_KEY);

if (savedName === null) {
loginForm.classList.remove(HIDDEN_CLASS);
loginForm.addEventListener("submit", loginSubmit);
} else {
printGreeting(savedName);
}

function printGreeting (user) {
greeting.innerText = `hello ${user}`;
greeting.classList.remove(HIDDEN_CLASS);
}

function loginSubmit(event) {
event.preventDefault();
loginForm.classList.remove(HIDDEN_CLASS);
const name = loginInput.value;
localStorage.setItem(USERNAME_KEY, name);
loginForm.classList.add(HIDDEN_CLASS);
printGreeting(name);
}