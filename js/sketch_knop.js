const lang = navigator.language || 'nl-NL' //Stel taal waarop hij moet focusen in
const myRec = new p5.SpeechRec(lang) // nieuwe P5.SpeechRec object aanmaken
let button

function setup()
{
	// Geef instructies hoe het eruit moet komen te zien:

	myRec.onResult = createNote
	button = createButton('Start Rec')
	button.position(190, 1065)
	button.style('margin-top', '-12.4rem')
	button.style('margin-left', '8.8rem')
	button.style('justify-self', 'center')
	button.style('width', '5%')
	button.style('height', '5.5%')
	button.style('font-family', 'Roboto')
	button.style('font-size', '14px')
	button.style('color', '#414042')
	button.style('background-color', '#e79f37')
	button.style('border-radius', '2rem')
	button.style('border', '0 solid #414042')
	button.style('box-shadow', '1px 1px 3px 0.5px #414042')

	button.mousePressed(startRec)

	function startRec(){
		myRec.start()
	}
	//Functie die het recorden van je stem start
}



//Functie laat de text zien die word besproken
function showResult()
{
	if(myRec.resultValue==true) {
		background(192, 255, 192) //Achtergrond wordt zoals een kladpapier geel
		text(myRec.resultString, width/2, height/2) //Veranderd de text naar wat de microfoon ziet
		console.log(myRec.resultString) //Je ziet het resultaat nog een keer in de console
	}
}

//Create new note
//Check divlengt and create note with new Div id number
//Add text area
//Insert recorded string into textarea
//Insert Note before element with ID = mydivheader
let numDiv = 6
function createNote()
{
	numDiv++
	const newNote = document.createElement("div")
	newNote.setAttribute("id", numDiv)
	newNote.setAttribute("class", "note")
	const newText = document.createElement("textarea")
	console.log(myRec.resultString)
	newText.innerHTML = myRec.resultString
	newNote.appendChild(newText)
	const currentDiv = document.getElementById("mydivheader")
	document.body.insertBefore(newNote, currentDiv)
}

//Laad dit bestand zodra de window opstart
window.setup = setup