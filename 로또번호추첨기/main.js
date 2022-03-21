const numbersDiv = document.querySelector('.numbers');
const drawButton = document.querySelector('#draw');
const resetButton = document.querySelector('#reset');


const lottoNumbers = []
const colors = ["tomato", "teal", "orange", "purple", "skyblue"]




function paintNumber(number){
    const eachNumDiv = document.createElement("div")
    let colorIndex = Math.floor(number / 10)
    eachNumDiv.classList.add('eachnum')
    eachNumDiv.style.backgroundColor = colors[colorIndex]
    eachNumDiv.textContent = number
    numbersDiv.appendChild(eachNumDiv)
}

drawButton.addEventListener("click",function(){
    while(lottoNumbers.length < 6){
        let ran = Math.floor(Math.random() * 45) + 1 //1부터 45까지 랜덤
        if(lottoNumbers.indexOf(ran) === -1){       // 반복 금지 indexOf 주어진값이 배열의 몇번 인덱스인지 반환
          lottoNumbers.push(ran);
          paintNumber(ran)
        } 
        
    }
})

resetButton.addEventListener("click",function(){
    lottoNumbers.splice(0,6) //로또 배열에 있는 수 지우기
    numbersDiv.innerHTML = "" //모든태그 없애기
})