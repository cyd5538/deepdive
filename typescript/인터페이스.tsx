type Score = 'A' | 'B' | 'C' | 'F'

interface User {
    name : string;
    age : number;
    gender?: string;
    readonly birthYear : number;
    [xx:number] : Score;
}

//?를 붙이면 입력해도되고 안해도되는 옵션
//readonly 읽기전용 속성

let user:User = {
    name : 'dd',
    age : 2,
    birthYear : 122,
    1 : 'A',
    222 : 'B'
}

interface Add {
    (x:number, y:number): number;
}

const add : Add = function(x,y){
    return x + y;
}
console.log(add(2,5));

//나이를 받아서 성인인지 아닌지 boolean

interface Isadult {
    (age:number) : boolean;
}
const adult:Isadult = (age) => {
    return age > 19;
}

console.log(adult(33))

// implements
interface Car {
    color: string;
    wheels: number;
    start() : void;
}

class Bmw implements Car {
    wheels = 4;
    color;
    constructor(c:string){
        this.color = c;
    }

    start(){
        console.log('go..')
    }
}

const bbb = new Bmw('green');
console.log(bbb);
bbb.start();

// extends
interface Benz extends Car {
    door : number,
    stop() : void;
}

const Benz : Benz = {
    color: 'red',
    wheels: 4,
    door : 5,
    start(){
        console.log('start');
    },
    stop(){
        console.log('stop');
    }
}

//extends 는 동시에 여러개 가능

interface Car {
    color: string;
    wheels: number;
    start(): void;
}

interface Toy {
    name: string;
}

interface ToyCar extends Car, Toy {
    price: number;
}
