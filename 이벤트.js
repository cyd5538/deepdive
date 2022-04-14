const h2 = document.querySelector("#h2");
const color = ["green", "red", "yellow", "purple"];

const superEventHandler = {
  MouseOn: function () {
    h2.style.color = color[0];
    h2.innerText = "The mouse is Here";
  },
  MouseOut: function () {
    h2.style.color = color[1];
    h2.innerText = "The mouse is gone";
  },
  browersResize: function () {
    h2.style.color = color[2];
    h2.innerText = "You just resized";
  },
  MouseClick: function () {
    h2.style.color = color[3];
    h2.innerText = "You was right click";
  }
};

h2.addEventListener("mouseenter", superEventHandler.MouseOn);
h2.addEventListener("mouseleave", superEventHandler.MouseOut);
window.addEventListener("contextmenu", superEventHandler.MouseClick);
window.addEventListener("resize", superEventHandler.browersResize);
