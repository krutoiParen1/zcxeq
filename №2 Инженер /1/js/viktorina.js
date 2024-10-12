let div1 = document.getElementById("div1");
let div2 = document.getElementById("div2");
let div3 = document.getElementById("div3");
let div4 = document.getElementById("div4");
let div5 = document.getElementById("div5");
let div6 = document.getElementById("div6");
let div7 = document.getElementById("div7");
let div8 = document.getElementById("div8");
let div9 = document.getElementById("div9");
let div10 = document.getElementById("div10");
let div11 = document.getElementById("div11");
var radios = document.querySelectorAll('input[type="radio"][value="true"]');
let g = 0;
let n = 1;


function next1(){
  div1.style.display = "none"
  div2.style.display = "block"
}
function back2(){
  div2.style.display = "none"
  div1.style.display = "block"
}


function next2(){
  div2.style.display = "none"
  div3.style.display = "block"
}
function back3(){
  div3.style.display = "none"
  div2.style.display = "block"
}


function next3(){
  div3.style.display = "none"
  div4.style.display = "block"
}
function back4(){
  div4.style.display = "none"
  div3.style.display = "block"
}


function next4(){
  div4.style.display = "none"
  div5.style.display = "block"
}
function back5(){
  div5.style.display = "none"
  div4.style.display = "block"
}


function next5(){
  div5.style.display = "none"
  div6.style.display = "block"
}
function back6(){
  div6.style.display = "none"
  div5.style.display = "block"
}


function next6(){
  div6.style.display = "none"
  div7.style.display = "block"
}
function back7(){
  div7.style.display = "none"
  div6.style.display = "block"
}


function next7(){
  div7.style.display = "none"
  div8.style.display = "block"
}
function back8(){
  div8.style.display = "none"
  div7.style.display = "block"
}


function next8(){
  div8.style.display = "none"
  div9.style.display = "block"
}
function back9(){
  div9.style.display = "none"
  div8.style.display = "block"
}


function next9(){
  div9.style.display = "none"
  div10.style.display = "block"
}
function back10(){
  div10.style.display = "none"
  div9.style.display = "block"
}

function result(){
  div10.style.display = "none"
  div11.style.display = "block"

  var activatedRadios = 0;
  for (var i = 0; i < radios.length; i++) {
  if (radios[i].checked) {
    activatedRadios++;
  }
}
document.getElementById("result").innerHTML = activatedRadios + " из 10 правильно"
}

function next11(){
  div11.style.display = "none"
  div1.style.display = "block"
}

// 1) b
// 2) c
// 3) b
// 4) b
// 5) b
// 6) b
// 7) c
// 8) c
// 9) b
// 10) c