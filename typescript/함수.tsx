// 함수

function add1(num1:number, num2:number) : number {
    return num1 + num2;
}

function Hello(name?: string) {
    return `Hello, ${name || "world"}`
}
function Hello2(name: "world") {
    return `Hello, ${name}`
}

const result = Hello();
const result2 = Hello("Sam")

function Hello3(name: string, age?: number) : string {
    if(age !== undefined){
        return `Hello, ${name}. You are ${age}.`;
    } else {
        return `Hello, ${name}`;
    }
}
console.log(Hello3("YJ"))


function add2(...nums: number[]){
    return nums.reduce((result, num) => result + num, 0);
}

add2(1,2,3);
add2(1,2,3,4,5,6,7,8,9,10);


interface User{
    name: string;
}



function showName(this:User, age:number, gender: 'm'|'f'){
    console.log(this.name)
}

const aaa = showName.bind('Sam');
aaa(30, 'm');


interface User2 {
    name: string;
    age: number;
}

function join(name: string, age: string): string;
function join(name: string, age: number): User2;
function join(name: string, age: number | string): User2 | string{
    if(typeof age === "number"){
        return{
            name,
            age
        };
    }else{
        return "나이는 숫자로 입력해주세요.";
    }
}

const sam: User2 = join("Sam", 30);

