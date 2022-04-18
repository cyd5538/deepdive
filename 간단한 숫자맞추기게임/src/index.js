const userNumber = document.querySelector("#usernumber");
const resultNumber = document.querySelector("#resultnumber");
const submit = document.querySelector("#submit");
const h4 = document.querySelector("#h4");
const correct = document.querySelector("#correct");

const gameResult = (event) => {
  event.preventDefault();
  const random = Math.floor(Math.random() * userNumber.value + 1);
  h4.innerText = `You choose: ${resultNumber.value} the machine choose : ${random}`;
  if (random === Number(resultNumber.value)) {
    correct.innerText = "You Win";
  } else {
    correct.innerText = "You lose";
  }
};

submit.addEventListener("click", gameResult);
