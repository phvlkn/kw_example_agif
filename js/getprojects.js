const requestURL = "./" + category + "/projects.json",
    request = new XMLHttpRequest;

function populatePage(e) {
    const t = e.projects;
    for (let e = 0; e < t.length; e++) {
        const n = document.querySelector(".category"),
            o = document.createElement("a");
        o.className = "projectElem";
        const s = document.createElement("div");
        s.className = "project";
        const r = document.createElement("h2"),
            c = document.createElement("img");
        o.setAttribute("href", "./" + category + "/" + t[e].id + ".html"), o.appendChild(s), n.appendChild(o), c.setAttribute("src", t[e].thumbnail), s.appendChild(c), r.textContent = t[e].name, s.appendChild(r)
    }
}
request.open("GET", requestURL), request.responseType = "json", request.send(), request.onload = function () {
    populatePage(request.response)
};