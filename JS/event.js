// LOGIN EFFECT

document.getElementById("register").addEventListener("click", cardRotate);
document.getElementById("Login").addEventListener("click", cardRotate2);
document.getElementById("btnR").addEventListener("click", cardRotate2);

function cardRotate() {
  document.getElementById("card").style.transform = "rotateY(180deg)";
}

function cardRotate2() {
  document.getElementById("card").style.transform = "rotateY(0)";
}
