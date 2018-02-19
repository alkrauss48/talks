var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");

// NEW CODE
var x = canvas.width/2;
var y = canvas.height-30;
var ballRadius = 10;

function drawBall() {
  ctx.beginPath();
  ctx.arc(x, y, ballRadius, 0, Math.PI*2);
  ctx.fillStyle = "blue";
  ctx.fill();
  ctx.closePath();
}
// END NEW CODE

function draw() {
  drawBall();

  requestAnimationFrame(draw);
}

requestAnimationFrame(draw);
