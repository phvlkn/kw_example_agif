"use strict";

var i,
    coll = document.getElementsByClassName("btn-collapse");

for (i = 0; i < coll.length; i++) {
  button = coll[i].children[0], button.addEventListener("click", function () {
    iconPath = this.children[0].children[0].children[0].children[0], content = this.nextElementSibling, "block" === content.style.display ? (content.style.display = "none", iconPath.setAttribute("d", "M12 4C11.4477 4 11 4.44772 11 5V11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11H13V5C13 4.44772 12.5523 4 12 4Z")) : (content.style.display = "block", iconPath.setAttribute("d", "M4 12C4 11.4477 4.44772 11 5 11H19C19.5523 11 20 11.4477 20 12C20 12.5523 19.5523 13 19 13H5C4.44772 13 4 12.5523 4 12Z"));
  });
}