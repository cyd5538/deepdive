const clock = document.querySelector('.js-clock');

const getDay = () => {
    const xmas = new Date('December 25 2022 00:00:00 GMT+9000').getTime();
    const today = new Date().getTime();
    const dday = xmas - today; 

    const days = Math.floor(dday / (1000 * 60 * 60 * 24));
    const hours = String(Math.floor((dday % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(2,"0");
    const minutes = String(Math.floor((dday % (1000 * 60 * 60 )) / (1000 * 60 ))).padStart(2,"0");
    const seconds = String(Math.floor((dday % (1000 * 60 )) / 1000)).padStart(2,"0");

    clock.innerText = `${days}d ${hours}h ${minutes}m ${seconds}s`
}

getDay();
setInterval(getDay, 1000);