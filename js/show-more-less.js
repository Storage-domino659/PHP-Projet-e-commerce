let togg1 = document.getElementById("togg1");
let d1 = document.getElementById("d1");


function togg(){
  if(getComputedStyle(d1).display != "none"){
    d1.style.display = "none";
    document.getElementById("togg1").innerHTML = "SHOW MORE";
  } else {
    d1.style.display = "block";
    document.getElementById("togg1").innerHTML = "SHOW LESS";
  }
};
togg1.onclick = togg;