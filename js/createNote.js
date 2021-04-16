
//Create new note
//Check divlengt and create note with new Div id number
//Add text area
//Insert Note before element with ID = mydivheader
function createNote() {
    var divnum = divs.length
    const newNote = document.createElement("div");
    newNote.setAttribute("id", divnum);
    newNote.setAttribute("class", "note");
    const newText = document.createElement("textarea");
    newNote.appendChild(newText);
    const currentDiv = document.getElementById("mydivheader");
    document.body.insertBefore(newNote, currentDiv);
    console.log(divs.length);
}

