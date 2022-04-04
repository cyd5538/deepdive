const canvas = document.getElementById("jsCanvas");
const ctx = canvas.getContext("2d");
const colors = document.getElementsByClassName("jsColor");
const range = document.getElementById("jsRange");
const mode = document.getElementById("jsMode");
const saveBtn = document.getElementById('jsSave');
const clear = document.getElementById('Clear');
const eraser = document.getElementById('eraser');
const INITIAL_COLOR = "#2c2c2c"
const CANVAS_SIZE = 700;

canvas.width = CANVAS_SIZE;
canvas.height = CANVAS_SIZE;

ctx.fillStyle = 'white';
ctx.fillRect(0, 0, CANVAS_SIZE, CANVAS_SIZE) 
ctx.strokeStyle = INITIAL_COLOR;
ctx.fillStyle = INITIAL_COLOR;
ctx.lineWidth = 2.5;

eraser.addEventListener("click", () => ctx.strokeStyle = "white");

let painting = false;
let filling = false;

function stopPainting() {
  painting = false;
}

function startPainting() {
  painting = true;
}

const onMouseMove = (event) => {
  const x = event.offsetX;
  const y = event.offsetY;
  if (!painting) {
    ctx.beginPath();
    ctx.moveTo(x, y);
  } else {
    ctx.lineTo(x, y);
    ctx.stroke();
  }
};

const handleCanvasClick = () => {
    if(filling){
        ctx.fillRect(0, 0, CANVAS_SIZE, CANVAS_SIZE) 
    } 
}

const handleCM = (event) => {
    event.preventDefault();
}

if (canvas) {
  canvas.addEventListener("mousemove", onMouseMove);
  canvas.addEventListener("mousedown", startPainting);
  canvas.addEventListener("mouseup", stopPainting);
  canvas.addEventListener("mouseleave", stopPainting);
  canvas.addEventListener("click",handleCanvasClick);
  canvas.addEventListener("contextmenu",handleCM);
}

// Changing Color
function handleColorClick(event) {
  const color = event.target.style.backgroundColor;
  ctx.strokeStyle = color;
  ctx.fillStyle = color;
}



//배열로 바꾸기 forEach 공부할것.
Array.from(colors).forEach((color) =>
  color.addEventListener("click", handleColorClick)
);

// brush Size
const handleRangeChange = (event) => {
  const size = event.target.value;
  ctx.lineWidth = size;
};

if (range) {
  range.addEventListener("input", handleRangeChange);
}

const handleModeClick = (event) => {
  if (filling === true) {
    filling = false;
    mode.innerText = "Fill";
  } else {
    filling = true;
    mode.innerText = "Paint";
  }
};

if (mode) {
  mode.addEventListener("click", handleModeClick);
}

const handleSaveClick = () => {
    const image = canvas.toDataURL("image/png"); 
    const link = document.createElement('a');
    link.href = image;
    link.download = 'PaintJS[♥]';
    link.click();
}

if (saveBtn) {
    saveBtn.addEventListener('click', handleSaveClick);
}

const clearAll = () => {
    ctx.clearRect(0,0,CANVAS_SIZE,CANVAS_SIZE)
}

if (clear){
    clear.addEventListener("click", clearAll);
}