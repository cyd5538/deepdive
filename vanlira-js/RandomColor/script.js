const container = document.querySelector(".container");
const refreshBtn = document.querySelector(".refresh-btn");

const maxPaletteBoxes = 32;

const generatePalette = () => {
    container.innerHTML = "";
    for(let i=0; i< maxPaletteBoxes; i++){
        // 랜덤 rgb
        let randomHex = Math.floor(Math.random() * 0xffffff).toString(16);
        // 6자리 앞에 0 붙이기
        randomHex = `#${randomHex.padStart(6, "0")}`;
        const color = document.createElement("li");
        color.classList.add("color");
        color.innerHTML = `        
        <div class="rect-box" style="background: ${randomHex}"></div>
        <span class="hex-value">${randomHex}</span>`

        color.addEventListener("click", () => copyColor(color, randomHex))
        container.appendChild(color)
    }
}
generatePalette()

const copyColor = (elem, hexVal) => {
    const colorElement = elem.querySelector(".hex-value");
    navigator.clipboard.writeText(hexVal).then(() => {
        colorElement.innerHTML = "Copyied"
        setTimeout(() => colorElement.innerHTML = hexVal, 1000)
    })
}  

refreshBtn.addEventListener("click", generatePalette);