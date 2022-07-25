// 타입스크립트의 기본 타입에는 크게 12가지가 있다.

// String
let str: string = 'hi';

// :를 이용하여 자바스크립트 코드에 타입을 정의하는 방식을 타입표기라고 한다.

// Number
let num: number = 1;

// Boolean
let isLoggedIn: boolean = false;

// Array
let arr: number[] = [1,2,3];
// 제네릭 사용하기
let arr2: Array<number> = [1,2,3]

// Tuple
// 튜플은 배열의 길이가 고정되고 각 요소의 타입이 지정되어 있는 배열 형식을 말한다
let arr3: [string,number] = ['hi', 10];

// Enum 열거형으로 이름이 있는 상수들의 집합을 정의할 수 있습니다. 
// 열거형을 사용하면 의도를 문서화 하거나 구분되는 사례 집합을 더 쉽게 만들수 있습니다. 
// ypeScript는 숫자와 문자열-기반 열거형을 제공합니다.
enum Direction {
    Up = 1,
    Down,
    Left,
    Right,
  }

// 위 코드에서 Up이 1로 초기화된 숫자 열거형을 선언
// 그지점부터 뒤따르는 멤버들은 자동으로-증가된 값을 갖는다.
// Direction.Up 은 1, Down 은 2, Left 는 3, Right 은 4 을 값으로 가집니다.

// Any 모든 타입에 대해서 허용한다는 의미
let str1 : any = "hi"
let num1 : any = 10
let arr4 : any = ['a', 2, true]

// Void 변수에는 undefined와 null만 할당하고, 함수에는 반환값을 설정할 수 없는 타입
let unuseful: void = undefined;
function notuse(): void {
  console.log('sth');
}

// Never 함수의 끝에 절대 도달하지 않는다는 의미를 지닌 타입입니다.
// 이 함수는 절대 함수의 끝까지 실행되지 않는다는 의미
function neverEnd(): never {
    while (true) {
  
    }
  }