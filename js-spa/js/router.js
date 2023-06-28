const route = (event) => {
  // event가 없으면 window.event 할당
  event = event || window.event;
  // 새로고침 방지
  event.preventDefault();
  // history.pushState() 메서드는 브라우저의 세션 기록 스택에 상태를 추가
  window.history.pushState({}, "", event.target.href);
  handleLocation();
};  

const routes = {
  "/": "/pages/index.html",
  "/index.html": "/pages/index.html",
  404: "/pages/404.html",
  "/about": "/pages/about.html",
  "/page1": "/pages/page1.html",
  "/page2": "/pages/page2.html",
};

const handleLocation = async () => {
  // 현재 URL 경로 가져오기
  const path = window.location.pathname;
  // 해당 경로에 맞는 라우트 가져오기
  const route = routes[path] || routes[404];
  // 해당 라우트로부터 HTML 가져오기
  const html = await fetch(route).then((data) => data.text());
  // 가져온 HTML을 웹 페이지의 'page' 요소에 삽입
  document.getElementById("page").innerHTML = html;
};

// 처음에 실행해야 함.
handleLocation();
