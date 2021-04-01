function navHead() {
    let nav = document.getElementById("navbar");
    if(nav.className === "header") {
        nav.className += " responsive";
    } else {
        nav.className = "header";
    }
}