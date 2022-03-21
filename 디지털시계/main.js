const todayDiv = document.querySelector('#today');
const timeDiv = document.querySelector('#time');

//매초마다 시간이 가는 동작
function getTime(){
    let now = new Date(); // 생성자 함수
    timeDiv.textContent = now;
    let year = now.getFullYear(); //2022 year만 반환
    let month = now.getMonth() +1; //달에 숫자 1을 더해줘야함
    let date = now.getDate();
    let hour = now.getHours();
    let minute = now.getMinutes();
    let second = now.getSeconds();
    console.log(now);

    // 02월 05초 이런식으로 숫자가 10보다 작으면 앞에 0을 붙임
    month = month < 10 ? `0${month}` : month
    date = date < 10 ? `0${date}` : date
    hour = hour < 10 ? `0${hour}` : hour
    minute = minute < 10 ? `0${minute}` : minute
    second = second < 10 ? `0${second}` : second


    todayDiv.textContent = `${year}년 ${month}월 ${date}일`
    timeDiv.textContent = `${hour}시 ${minute}분 ${second}초`
}

//setInterval 출력되기전에 출력
getTime()
// 1초뒤에 나오기때문에 첫1초에서는 나오지않음
setInterval(getTime, 1000);