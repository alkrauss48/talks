var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");

var x = canvas.width/2;
var y = canvas.height-30;
// NEW VARIABLES
var dx = 2;
var dy = -2;
// END NEW VARIABLES
var ballRadius = 10;

function drawBall() {
  ctx.beginPath();
  ctx.arc(x, y, ballRadius, 0, Math.PI*2);
  ctx.fillStyle = "blue";
  ctx.fill();
  ctx.closePath();
}

function draw() {
  drawBall();

  // NEW CODE
  x += dx;
  y += dy;
  // END NEW CODE

  requestAnimationFrame(draw);
}

requestAnimationFrame(draw);
