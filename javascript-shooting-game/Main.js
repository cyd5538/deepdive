// 캔버스 세팅

let canvas;
let ctx;
// 캔버스 만들기
canvas = document.createElement('canvas');
ctx = canvas.getContext("2d");
canvas.width=400;
canvas.height=700;
//자식으로 넣어주기
document.body.appendChild(canvas)

// 이미지 만들기 함수
let backgroundImage,spaceShipimage,bulletImage,enemyImage,gameOverImage;

// 우주선 좌표
let spaceShipX = canvas.width/2-30
let spaceShipY = canvas.height-50

function loadImage () { 
    // image객체가 생성되어 속성들을 추가할수 있음
    // new Image(width, height); 파라미터를 넣어 미리 크기를 지정 가능
    backgroundImage = new Image();
    backgroundImage.src ="images/background.jpg"

    spaceShipimage = new Image();
    spaceShipimage.src ="images/octopus.png"

    bulletImage = new Image();
    bulletImage.src ="images/bullet.png"

    gameOverImage = new Image();
    gameOverImage.src ="images/gameover.png"
}

let keysDown = {}
function steupkeyboardListner () {
  document.addEventListener("keydown", function(event){
      keysDown[event.key] = true
      console.log(keysDown)
  })
  document.addEventListener("keyup", function(event){
    delete keysDown[event.key]
  })
} 

function update(){
  if("ArrowRight" in keysDown){
    spaceShipX += 3 ;
  } // right
  if("ArrowLeft" in keysDown){
    spaceShipX -= 3 ;
  } // left
  if(spaceShipX <=0) {
    spaceShipX=0
  }
  if(spaceShipX >= canvas.width - 50){
    spaceShipX = canvas.width - 50
  }
}

// 이미지 보여주는 함수
function render() {
    ctx.drawImage(backgroundImage, 0, 0, canvas.width, canvas.height)
    ctx.drawImage(spaceShipimage, spaceShipX, spaceShipY)

}

function main () {
  update();
  render();
  console.log(spaceShipX)
  // 프레임을 계속 여러번 호출한다
  requestAnimationFrame(main)  
}



loadImage();
steupkeyboardListner();
main()