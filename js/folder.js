//Turn on / off folder overlay
var folderactive = 0;
document.getElementById("overlay").style.display = "none";
function folderActive()
{
    if(folderactive == 1)
    {
        document.getElementById("overlay").style.display = "block";
        folderactive = 0;
    }
    else
    {
        document.getElementById("overlay").style.display = "none";
        folderactive = 1;
    }
    console.log(folderactive);
}