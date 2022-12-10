const currentDate = document.querySelector(".current-date");
daystag = document.querySelector(".days");
prevNextIcon = document.querySelectorAll(".icons span");

// getting new date, current year and month
let date = new Date(),
currYear = date.getFullYear();
currMonth = date.getMonth();

const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(); // 해당 월의 마지막 날 가져오기
    let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(); // 해당 월의 마지막 날 가져오기
    let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(); // 해당 월의 마지막 날 가져오기
    let lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // 해당 월의 마지막 날 가져오기

    let litag = "";

    for (let i= firstDayofMonth; i > 0; i--){
        litag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i=1; i<=lastDateofMonth; i++){
        let isToday = i === date.getDate() && currMonth === new Date().getMonth()
        && currYear === new Date().getFullYear() ? "active" : "";

        litag += `<li class="${isToday}">${i}</li>`;
    }
    
    for (let i= lastDayofMonth; i< 6; i++){
        litag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
    }

    currentDate.innerText = `${months[currMonth]} ${currYear}년`
    daystag.innerHTML = litag;
}
renderCalendar()

prevNextIcon.forEach(icon => {
    icon.addEventListener('click', () => {
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
        if(currMonth < 0 || currMonth > 11){
            date = new Date(currYear, currMonth);
            currYear = date.getFullYear();
            currMonth = date.getMonth();
        }else{
            date = new Date();
        }
        renderCalendar() 
    })
})