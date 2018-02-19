var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");

function draw() {
  // Do stuff here

  requestAnimationFrame(draw);
}

requestAnimationFrame(draw);
