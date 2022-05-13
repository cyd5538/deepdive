// Generic 클래스나 함수 인터페이시를 다양한 타입으로 재사용 

function getSize<T>(arr: T[]) {
    return arr.length;
}

const arr1 = [1, 2, 3];
getSize(arr1);  
const arr2 = ['a', 'b', 'c'];
getSize(arr2);


interface Mobile<T> {
    name: string;
    price: number;
    option: T;
}

const m1:Mobile<{color: string; coupon: boolean}> = {
    name: "s21",
    price: 1000,
    option: {
        color: 'red',
        coupon: false,
    }
}
const m2:Mobile<string> = {
    name: "s20",
    price: 800,
    option: "good"
}


interface User{
    name: string;
    age: number;
}

interface Car {
    name: string;
    color: string;
}

interface Book {
    price: number;
}

const user: User = {name: "a", age: 10};
const car: Car = {name: "bmw", color: 'red'};
const book: Book = {price: 3000};

function showName<T extends {name:string}>(data:T): string {
    return data.name;
}

showName(user);
showName(car);

