"use strict";

var requestURL = "./projects.json",
    request = new XMLHttpRequest();
request.open("GET", requestURL), request.responseType = "json", request.send();
var thumbnail = document.querySelector(".article-thumbnail"),
    header = document.querySelector(".article-header"),
    name = document.createElement("h1"),
    img = document.createElement("img");

function populatePage(e) {
  var t = e.projects;
  thumbnail.setAttribute("style", "background-color: " + t[i].color), img.setAttribute("src", t[i].thumbnail), thumbnail.appendChild(img), name.textContent = t[i].name, header.appendChild(name);
}

request.onload = function () {
  populatePage(request.response);
};