const wordText = document.querySelector(".word");
const hintText = document.querySelector(".hint span");
const TimeText = document.querySelector(".time b");
const refreshBtn = document.querySelector(".refresh-word");
const checkBtn = document.querySelector(".check-word");
const inputField = document.querySelector("input");

let correctWord, timer;

const initTimer = maxTime => {
    clearInterval(timer);
    timer = setInterval(() => {
        if(maxTime > 0){
            maxTime --;
            return TimeText.innerText = maxTime;
        }
        alert(`정답 :${correctWord.toUpperCase()} Time Over`);
        initGame()
    },1000)
}

const initGame = () => {
    initTimer(15);
    let randmObj = words[Math.floor(Math.random() * words.length)]; // 랜덤 겟
    let wordArray = randmObj.word.split(""); //하나씩 쪼개
    for(let i= wordArray.length-1; i > 0; i--){
        let j = Math.floor(Math.random() * (i+1)); // 쪼갠거 랜덤으로
        let temp = wordArray[i]
        wordArray[i] = wordArray[j];
        wordArray[j] = temp;
    }
    wordText.innerText = wordArray.join(""); // ,없앰
    hintText.innerText = randmObj.hint; // 힌트
    correctWord = randmObj.word.toLowerCase();
    // 인풋길이를 문제의 길이와 동일하게
    inputField.value = "";
    inputField.setAttribute("maxLength", correctWord.length);
}

const checkWord = () => {
    let userWord = inputField.value.toLowerCase();
    if(!userWord) return alert("빈칸은 No!")
    if(userWord !== correctWord) return alert(`${userWord}? 이걸 틀려?`)
    return alert(`${userWord.toUpperCase()} 정답`)
}

refreshBtn.addEventListener("click", initGame)
checkBtn.addEventListener("click", checkWord)

initGame();