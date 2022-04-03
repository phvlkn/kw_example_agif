"use strict";

var button = document.getElementsByTagName("button")[0],
    form = document.getElementsByClassName("popup-form")[0];
button.addEventListener("click", function () {
  "block" === form.style.display ? form.style.display = "none" : form.style.display = "block";
});