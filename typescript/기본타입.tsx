let age:number = 30;
let isAdult:boolean = true;
let a:number[] = [1,2,3];
let a2:Array<number> = [1,2,3];

let week1:string[] = ['mon', 'tue', 'wed'];
let week2:Array<string> = ['mon', 'tue', 'wed'];

// 튜블 Tuple
let b:[string, number]; 
b = ['string',1]

b[0].toLowerCase();

// void, never
//  void 아무것도 반환하지 않을 때 사용
function sayHello():void{
    console.log('hello')
}

// never 에러를 반환하거나 무한루프일 떄 사용
function showError():never{
    throw new Error();
}

function infLoop():never{
    while (true){
        //do something..
    }
}

// enum
enum Os {
    window,
    Ios = 10,
    Android
}
console.log(Os[10]) //Ios 
console.log(Os['Ios']) //10 
//양방향

enum Os2 {
    window = 'win',
    Ios = 'ios',
    Android = 'and'
}
//숫자가 아니면 단방향

let myOs:Os;
// Os에 있는 값만 가능
myOs = Os.window
//특정 값만 입력하는걸 강제하고 싶을때 , 그 값들이 공통점이 있을때 enum 사용

//null, undefined

let aa:null = null;
let bb:undefined = undefined;