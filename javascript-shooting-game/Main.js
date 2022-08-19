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

let bulletList = []  // 총알 저장 리스트

function Bullet(){
  this.x = 0
  this.y = 0
  this.init = function (){
    this.x = spaceShipX + -20
    this.y = spaceShipY
    bulletList.push(this)
  }
  this.update = function() {
    this.y -= 7
  }
}

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
      if(event.keyCode == 32){
        createBullet() //총알 생성
      }
  })
  document.addEventListener("keyup", function(event){
    delete keysDown[event.key]
  })
} 

function createBullet(){
  console.log("총알 생성")
  let b = new Bullet() // 총알 하나 생성
  b.init()
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
  // 총알의 y 좌표 업데이트하는 함수 호출
  for(let i=0; i<bulletList.length; i++){
    bulletList[i].update()
  }
}

// 이미지 보여주는 함수
function render() {
    ctx.drawImage(backgroundImage, 0, 0, canvas.width, canvas.height)
    ctx.drawImage(spaceShipimage, spaceShipX, spaceShipY)
    for(let i=0; i<bulletList.length; i++){
      ctx.drawImage(bulletImage,bulletList[i].x, bulletList[i].y)
    }
}

function main () {
  update();
  render();
  // 프레임을 계속 여러번 호출한다
  requestAnimationFrame(main)  
}



loadImage();
steupkeyboardListner();
main()

// 총알만들기
// 1. 스페이스바를 누르면 총알 발사
// 2. 총알이 발사 = 총알의 y값이 --- 총알의, x값은 스페이를 누르순간의 우주선의 y좌표
// 3. 발사된 총알들은 배열에 저장 
// 4. 총알들은 x,y좌표값이 있어야 한다.
// 5. 총알 배열을 가지고 render

