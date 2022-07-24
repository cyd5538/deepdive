// 타입스크립트에서의 함수

//함수의 기본적인 타입 선언
//매개변수와 함수의 반환 값에 타입을 추가
function sum(a: number, b: number): number {
    return a + b;
}

//타입스크립트에서는 함수의 인자를 모두 필수 값으로 간주합니다. 
//따라서, 함수의 매개변수를 설정하면 undefined나 null이라도 인자로 넘겨야하며 컴파일러에서 정의된 매개변수 값이 넘어 왔는지 확인합니다. 
//달리 말하면 정의된 매개변수 값만 받을 수 있고 추가로 인자를 받을 수 없다는 의미입니다.
function sum(a: number, b: number): number {
    return a + b;
  }
  sum(10, 20); // 30
  sum(10, 20, 30); // error, too many parameters
  sum(10); // error, too few parameters


//위와 같은 특성은 정의된 매개변수의 갯수 만큼 인자를 넘기지 않아도 되는 자바스크립트의 특성과 반대됩니다. 
//만약 이러한 특성을 살리고 싶다면 ?를 이용해서 아래와 같이 정의할 수 있습니다.
function sum2(a: number, b?: number): number {
    return a + b;
  }
  sum2(10, 20); // 30
  sum2(10, 20, 30); // error, too many parameters
  sum2(10); // 타입 에러 없음

//REST 문법이 적용된 매개변수
function sum(a: number, ...nums: number[]): number {
    let totalOfNums = 0;
    for (let key in nums) {
      totalOfNums += nums[key];
    }
    return a + totalOfNums;
}

//this 타입스크립트에서는 this가 가리키는 것을 명시하려면 아래와 같은 문법을 사용
interface Vue {
    el: string;
    count: number;
    init(this: Vue): () => {};
  }
  
  let vm: Vue = {
    el: '#app',
    count: 10,
    init: function(this: Vue) {
      return () => {
        return this.count;
      }
    }
  }
  
  let getCount = vm.init();
  let count = getCount();
  console.log(count); // 10

  // 콜백에서의 this
  
  interface UIElement {
    // 아래 함수의 `this: void` 코드는 함수에 `this` 타입을 선언할 필요가 없다는 의미입니다.
    addClickListener(onclick: (this: void, e: Event) => void): void;
  }
  
  class Handler {
      info: string;
      onClick(this: Handler, e: Event) {
          // 위의 `UIElement` 인터페이스의 스펙에 `this`가 필요없다고 했지만 사용했기 때문에 에러가 발생합니다.
          this.info = e.message;
      }
  }
  let handler = new Handler();
  uiElement.addClickListener(handler.onClick); // error!