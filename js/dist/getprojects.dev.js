"use strict";

var requestURL = "./" + category + "/projects.json",
    request = new XMLHttpRequest();

function populatePage(e) {
  var t = e.projects;

  for (var _e = 0; _e < t.length; _e++) {
    var n = document.querySelector(".category"),
        o = document.createElement("a");
    o.className = "projectElem";
    var s = document.createElement("div");
    s.className = "project";
    var r = document.createElement("h2"),
        c = document.createElement("img");
    o.setAttribute("href", "./" + category + "/" + t[_e].id + ".html"), o.appendChild(s), n.appendChild(o), c.setAttribute("src", t[_e].thumbnail), s.appendChild(c), r.textContent = t[_e].name, s.appendChild(r);
  }
}

request.open("GET", requestURL), request.responseType = "json", request.send(), request.onload = function () {
  populatePage(request.response);
};