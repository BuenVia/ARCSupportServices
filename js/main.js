// Navbar
function navHead() {
    let nav = document.getElementById("navbar");
    if(nav.className === "header") {
        nav.className += " responsive";
    } else {
        nav.className = "header";
    }
}

// About modal
let abtMod = document.getElementById('abtMod');
let abtBtn = document.getElementById('abtBtn');
let abtCls = document.getElementsByClassName('abtCls')[0];

abtBtn.onclick = function() {
    abtMod.style.display = "block"
}
abtCls.onclick = function() {
    abtMod.style.display = "none";
}

// About modal
let conMod = document.getElementById('conMod');
let conBtn = document.getElementById('conBtn');
let conCls = document.getElementsByClassName('conCls')[0];

conBtn.onclick = function() {
    conMod.style.display = "block"
}
conCls.onclick = function() {
    conMod.style.display = "none";
}


// eBook modal
let ebkMod = document.getElementById('ebkMod');
let ebkBtn = document.getElementById('ebkBtn');
let ebkCls = document.getElementsByClassName('ebkCls')[0];

ebkBtn.onclick = function() {
    ebkMod.style.display = "block"
}
ebkCls.onclick = function() {
    ebkMod.style.display = "none";
}

// Closing all modals
window.onclick = function(event) {
    if(event.target == ebkMod || event.target == abtMod || event.target == conMod) {
        ebkMod.style.display = "none";
        abtMod.style.display = "none";
        conMod.style.display = "none";
    }
}