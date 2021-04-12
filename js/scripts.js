var oDoc, sDefTxt;

function initDoc() {
  oDoc = document.getElementById("textBox");
  sDefTxt = oDoc.innerHTML;
  if (document.compForm.switchMode.checked) { setDocMode(true); }
}

function formatDoc(sCmd, sValue) {
  if (validateMode()) { document.execCommand(sCmd, false, sValue); oDoc.focus(); }
}

function validateMode() {
  if (!document.compForm.switchMode.checked) { return true ; }
  alert("Uncheck \"Show HTML\".");
  oDoc.focus();
  return false;
}

function setDocMode(bToSource) {
  var oContent;
  if (bToSource) {
    oContent = document.createTextNode(oDoc.innerHTML);
    oDoc.innerHTML = "";
    var oPre = document.createElement("pre");
    oDoc.contentEditable = false;
    oPre.id = "sourceText";
    oPre.contentEditable = true;
    oPre.appendChild(oContent);
    oDoc.appendChild(oPre);
    document.execCommand("defaultParagraphSeparator", false, "div");
  } else {
    if (document.all) {
      oDoc.innerHTML = oDoc.innerText;
    } else {
      oContent = document.createRange();
      oContent.selectNodeContents(oDoc.firstChild);
      oDoc.innerHTML = oContent.toString();
    }
    oDoc.contentEditable = true;
  }
  oDoc.focus();
}

function printDoc() {
  if (!validateMode()) { return; }
  var oPrntWin = window.open("","_blank","width=450,height=470,left=400,top=100,menubar=yes,toolbar=no,location=no,scrollbars=yes");
  oPrntWin.document.open();
  oPrntWin.document.write("<!doctype html><html><head><title>Print<\/title><\/head><body onload=\"print();\">" + oDoc.innerHTML + "<\/body><\/html>");
  oPrntWin.document.close();
}

dragElement(document.getElementById("mydiv"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
  }

  var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
  };

  var canvas, context, mouse = { x: 0, y: 0 };

			init();

			function init() {

				canvas = document.createElement( 'canvas' );
				canvas.width = 800;
				canvas.height = 400;
				canvas.style.cursor = 'crosshair';

				context = canvas.getContext( '2d' );
				context.strokeStyle = 'rgb(0,0,0)';
				context.lineWidth = 3;

				document.addEventListener( 'mousedown', onDocumentMouseDown, false );
				document.addEventListener( 'mouseup', onDocumentMouseUp, false );

				document.body.appendChild( canvas );

			}

			function onDocumentMouseDown( event ) {

        var eventDoc, doc, body;

        event = event || window.event;

        if(event.pageX == null && event.clientX != null)
        {
          eventDoc = (event.target && event.target.ownerDocument) || document;
          doc = eventDoc.documentElement;
          body = eventDoc.body

          event.pageX = event.clientX +
            (doc && doc.scrollLeft || body && body.scrollLeft || 0) -
            (doc && doc.clientLeft || body && body.clientLeft || 0);
          event.pageY = event.clientY +
            (doc && doc.scrollTop || body && body.scrollTop || 0) -
            (doc && doc.clientTop || body && body.clientTop || 0);
        }

        mouse.x = event.pageX;
        mouse.y = event.pageY - 50;
				document.addEventListener( 'mousemove', onDocumentMouseMove, false );

			};

			function onDocumentMouseUp( event ) {

				document.removeEventListener( 'mousemove', onDocumentMouseMove, false );

			}

			function onDocumentMouseMove( event ) {

				context.beginPath();
				context.moveTo( mouse.x, (mouse.y-120));
				context.lineTo( event.pageX, event.pageY-170);
				context.stroke();

				mouse.x = event.pageX;
				mouse.y = event.pageY - 50;

			}

      function newNote()
      {
        const para = document.createElement("div");
        para.setAttribute("class", "note");
        para.setAttribute("contentEditable", "true");
        const text = document.createElement("p");
        text.innerText = "penis";
        
      }

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

