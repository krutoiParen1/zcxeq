

document.getElementById("button-close").addEventListener("click", () => {
    document.getElementById("div-rod").style.display = "none" 
    document.body.style.position = "static"
})

document.getElementById("close-button").addEventListener("click", () => {
    document.getElementById("poisk").style.display = "none" 
    document.body.style.position = "static"
})

document.getElementById("button-poisk").addEventListener("click", () => {
    var a = parseInt(document.getElementById('poisk-value').value);
    var b = a + " ";
    document.getElementById("poisk").style.display = "none" 
    document.getElementById("div-info").style.display = "block"
    document.getElementById("u-num").innerHTML = a
})

document.getElementById("CloseDivInfo").addEventListener("click", () => {
    document.getElementById("div-info").style.display = "none" 
    document.body.style.position = "static"
})

function reg(){
    document.getElementById("div-rod").style.display = "block"
    document.body.style.position = "fixed"
}


function poisk(){
    document.getElementById("poisk").style.display = "block"
    document.body.style.position = "fixed"
}