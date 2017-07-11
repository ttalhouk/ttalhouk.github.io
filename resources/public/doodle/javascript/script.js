// select canvas
const canvas = document.querySelector('#draw');
const colorControls = document.querySelectorAll('li');
const snap = document.querySelector('.snap');
const strip = document.querySelector('.strip');
// get context
var color = getColor();
var size = 20;

const ctx = canvas.getContext('2d');

console.log(ctx);
canvas.width = window.innerWidth > 850 ? 850 : window.innerWidth - 40;
canvas.height = canvas.width * (5/9);
ctx.lineWidth = 2;
ctx.fillStyle = '#ffffff';
ctx.fillRect(0, 0, canvas.width, canvas.height)
ctx.strokeRect(0, 0, canvas.width, canvas.height)
ctx.strokeStyle = color;
ctx.lineJoin = 'round';
ctx.lineCap = 'round';
ctx.lineWidth = size;
// ctx.globalCompositeOperation = 'multiply';

let isDrawing = false;
let lastX = 0;
let lastY = 0;
let direction = true;


function draw(e) {
  if (!isDrawing) return;
  ctx.strokeStyle = color;
  ctx.beginPath();
  //start from
  ctx.moveTo(lastX, lastY);
  //go to
  ctx.lineTo(e.offsetX,e.offsetY);
  ctx.stroke();
  lastX = e.offsetX;
  lastY = e.offsetY;
}

function getColor(){
  const activeColor = document.querySelector('.active-color');
  var style = window.getComputedStyle(activeColor)
  var bg = style.getPropertyValue('background-color')
  return bg;
}

function handleClick(e){
  document.querySelector('.active-color').classList.remove('active-color');
  e.target.classList.add('active-color');
  color = getColor();
}

function takePhoto() {
  console.log(snap);
  snap.currentTime = 0;
  snap.play();
  const data = canvas.toDataURL('image/jpeg');
  const link = document.createElement('a');
  link.href = data;
  link.setAttribute('download', 'doodle');
  link.innerHTML = `<img src="${data}" alt="doodle" />`;
  strip.insertBefore(link, strip.firsChild);
}
function clearScreen(){
  ctx.strokeStyle = '#000000';
  ctx.lineJoin = 'round';
  ctx.lineCap = 'round';
  ctx.lineWidth = 2;
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.fillRect(0, 0, canvas.width, canvas.height);
  ctx.strokeRect(0, 0, canvas.width, canvas.height);
  ctx.strokeStyle = color;
  ctx.lineWidth = size;
}

canvas.addEventListener('mousemove', draw);
canvas.addEventListener('mousedown', (e) => {
  isDrawing = true;
  lastX = e.offsetX;
  lastY = e.offsetY;
});
canvas.addEventListener('mouseup', () => isDrawing = false);
canvas.addEventListener('mouseout', () => isDrawing = false);

colorControls.forEach(function(ele){
  ele.addEventListener('click', handleClick)
})
