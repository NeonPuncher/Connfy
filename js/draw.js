// resize canvas
function resize() {
    ctx.canvas.width = window.innerWidth;
    ctx.canvas.height = window.innerHeight;
  }
  
  //swtichcase for the drawing function
  var drawactivate = 0;
  function activateDraw()
  {
      if(drawactivate == 1)
      {
          drawactivate = 0;
          document.getElementById("drawIcon").style.webkitFilter = "brightness(100%)";
      }
      else
      {
          drawactivate = 1;
          document.getElementById("drawIcon").style.webkitFilter = "brightness(80%)";
      }
      console.log(drawactivate);
  }
  
  //drawing function
  function draw(e) {
    // mouse left button must be pressed
    if(drawactivate == 1){
      if (e.buttons !== 1) return;
  
      ctx.beginPath(); // begin
    
      ctx.lineWidth = 5;
      ctx.lineCap = 'round';
      ctx.strokeStyle = '#63aed9';
    
      ctx.moveTo(pos.x, pos.y); // from
      setPosition(e);
      ctx.lineTo(pos.x, pos.y); // to
    
      ctx.stroke(); // draw it!
    }
  }

  // get canvas 2D context and set him correct size
var ctx = canvas.getContext('2d');
resize();

// last known position
var pos = { x: 0, y: 0 };

window.addEventListener('resize', resize);
document.addEventListener('mousemove', draw);
document.addEventListener('mousedown', setPosition);
document.addEventListener('mouseenter', setPosition);

// new position from mouse event
function setPosition(e) {
  pos.x = e.clientX;
  pos.y = e.clientY; 
}