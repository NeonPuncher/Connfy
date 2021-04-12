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