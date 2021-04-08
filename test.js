function LoadDivs() {
    divs = document.getElementsByTagName("div");

    for (div of divs) div.onpointerdown = onpointerdown;            
    document.onpointermove = onpointermove;
    document.onpointerup   = onpointerup;
                
        canvas.width = screen.width - 20;
        canvas.height = screen.height - 220;
                
        var the_moving_div = ''; 
        var the_last_mouse_position = { x:0, y:0 };
                
        function onpointerdown(e) {
            the_moving_div            = e.target.id;      // remember which div has been selected 
            the_last_mouse_position.x = e.clientX;        // remember where the mouse was when it was clicked
            the_last_mouse_position.y = e.clientY;
            e.target.style.border = "2px solid blue";     // highlight the border of the div
                
            var divs = document.getElementsByTagName("div");
            e.target.style.zIndex = divs.length;          // put this div  on top
            var i = 1; for (div of divs) if (div.id != the_moving_div) div.style.zIndex = i++;   // put all other divs behind the selected one
        }
                
        function onpointermove(e) {
            if (the_moving_div == "") return;
            var d = document.getElementById(the_moving_div);
            d.style.left = d.offsetLeft + e.clientX - the_last_mouse_position.x + "px";     // move the div by however much the mouse moved
            d.style.top  = d.offsetTop  + e.clientY - the_last_mouse_position.y + "px";
            the_last_mouse_position.x = e.clientX;                                          // remember where the mouse is now
            the_last_mouse_position.y = e.clientY;
        }
                
        function onpointerup(e) {
            if (the_moving_div == "") return;
            document.getElementById(the_moving_div).style.border = "none";             // hide the border again
            the_moving_div = "";
            }
}


    
    //Loading the image file
    var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
    };

    //Getting selection to save note
    function GetSelection() {
    var selection  = "";

    var textarea = document.getElementById("myArea");
    if ('selectionStart' in textarea) {
        //check if text is selected
        if(textarea.selectionStart != textarea.selectionEnd) {
        selection = textarea.value.substring (textarea.selectionStart, textarea.selectionEnd);
        }
    }
    else { 
        var textRange = document.selection.createRange();
        var rageParent = textRange.parentElement();
        if (rangeParent === textarea) {
        selection = textRange.text;
        }
    }
    if(selection == ""){
        alert("No text is selected");
    }
    else{
        var para = document.createElement("P");
        para.innerHTML = selection;
        document.getElementById("mydivheader").appendChild(para);
    }
    }

function getSelectionText()
{
    var text = ""
    if(window.getSelection) {
        text = window.getSelection().toString();
    } else if (document.selection && document.selection.type != "control") {
        text = document.selection.createRange().text;
    }
    
    if(text == ""){
        alert("No text is selected");
    }
    else{
        var para = document.createElement("P");
        para.innerHTML = text;
        document.getElementById("mydivheader").appendChild(para);
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
    }
    else
    {
        drawactivate = 1;
    }
    console.log(drawactivate)
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

//Create new note
//Check divlengt and create note with new Div id number
//Add text area
//Insert Note before element with ID = mydivheader
function createNote() {
    var divnum = divs.length + 1;
    const newNote = document.createElement("div");
    newNote.setAttribute("id", divnum);
    const newText = document.createElement("textarea");
    newNote.appendChild(newText)
    const currentDiv = document.getElementById("mydivheader");
    document.body.insertBefore(newNote, currentDiv);
    console.log(divs.length);
}