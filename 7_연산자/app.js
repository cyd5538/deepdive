//연산자

// 예제 07-01

// 산술 연산자
5 * 4 // 20

//  문자열 연결 연산자
'MY name is' + 'Lee' // 'MY name is Lee'

// 할당 연산자
color = 'red' // red

// 비교 연산자
3 > 5 // false

// 논리 연산자

true && false // false

// 타입 연산자

typeof 'hi' // string

// 예제 07-02
5 + 2; // 7
5 - 2; // 3
5 * 2; // 10
5 / 2; // 2.5
5 % 2; // 1

// 예제 07-03
var x = 1;

// ++ 연산자는 피연산자의 값을 변경하는 암묵적 할당이 이뤄진다.
x++; // x = x + 1;
console.log(x); // 2
// -- 연산자는 피연산자의 값을 변경하는 암묵적 
//할당이 이뤄진다.
x--; // x = x -1;
console.log(x); // 1

// 예제 07-04
var x = 5, result;
 // 선할당 후증가
 result = x++;
 console.log(result, x); // 5 6

 // 선증가 후할당
 result = ++;
 console.log(result, x);

 //선할당 후감소
 reslut = x--;
 console.log(result,x) // 7 6

 //선감소 후할당
 result = --x;
 console.log(result,x); // 5 5

 // 예제 07-05 효과 XX
 +10;
 +(-10);
 f5