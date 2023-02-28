const items = document.querySelectorAll(".item");
const sortableList = document.querySelector(".sortable-sort")


// 모든 ".item" 요소에 대해서 dragstart와 dragend 이벤트를 등록합니다
items.forEach(item => {
    // 드래그가 시작되면, 해당 요소에 "dragging" 클래스를 추가합니다. 0초의 delay가 있습니다
    item.addEventListener("dragstart", () => {
        setTimeout(() => item.classList.add("dragging") ,0)
    });
    // 드래그가 끝나면, 해당 요소에서 "dragging" 클래스를 제거합니다.
    item.addEventListener("dragend", () => {
        item.classList.remove("dragging");
    });
}); 

const initSortableList = (e) => {
    e.preventDefault();
    // 현재 드래그 중인 요소를 찾습니다. "dragging" 클래스를 가진 요소를 선택합니다.
    const draggingItem = sortableList.querySelector(".dragging");
    // dragging 아닌 것들을 배열에 넣기
    const siblings = [...sortableList.querySelectorAll(".item:not(.dragging)")];

    // drag할 장소를 찾기
    let nextSibling = siblings.find(sibling => {
        return e.clientY <= sibling.offsetTop + sibling.offsetHeight /2;
    })
    // 해당 요소를 드래그 중인 요소의 바로 아래에 놓습니다.
    sortableList.insertBefore(draggingItem, nextSibling);
}


sortableList.addEventListener("dragover", initSortableList);
sortableList.addEventListener("draggenter", e => e.preventDefault());

// dragover 이벤트는 드래그 중인 요소가 다른 요소 위에 있을 때 발생합니다. 
// 이벤트 핸들러에서는 드래그 중인 요소의 위치를 변경하거나 드롭 가능한 영역을 
// 표시하는 등의 작업을 수행할 수 있습니다.

// dragstart 이벤트는 드래그 작업이 시작될 때 발생합니다. 이벤트 핸들러에서는 
// 드래그 중인 요소에 대한 정보를 설정하거나 드래그 중인 요소의 모양을 변경하는 등의 작업을 
// 수행할 수 있습니다.

// dragenter 이벤트는 드래그 중인 요소가 다른 요소에 진입할 때 발생합니다. 
// 이벤트 핸들러에서는 드래그 중인 요소가 들어갈 수 있는 영역을 표시하는 등의 작업을 
// 수행할 수 있습니다.

// dragend 이벤트는 드래그 작업이 끝날 때 발생합니다. 이벤트 핸들러에서는 
// 드래그 중인 요소의 상태를 초기화하거나 드롭 작업이 완료되었음을 처리하는 등의 작업을 
// 수행할 수 있습니다.