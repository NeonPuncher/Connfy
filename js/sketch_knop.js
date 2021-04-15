const lang = navigator.language || 'nl-NL' //Stel taal in waarop hij moet focusen
const myRec = new p5.SpeechRec(lang) // nieuwe P5.SpeechRec object aanmaken
let buttonMic;

function setup()
{
	
	// Geef instructies hoe het eruit moet komen te zien:
	textSize(20)
	textAlign(CENTER)
	text("zeg iets", width/2, height/2)
	buttonMic = createButton('click me')
	buttonMic.position(80, 400)
	buttonMic.style('font-size', '20px')
	myRec.onResult = showResult

	//Functie die het recorden van je stem start
	function startRec(){
		myRec.start()
		console.log("De knop is ingedrukt")
	}

	//Wanneer de knop wordt gedrukt begint hij met recorden
	buttonMic.mousePressed(startRec, console.log("This thing sucks bigger cock"))
}

//Functie laat de text zien die word besproken
function showResult()
{
	console.log("This thing sucks cock")
	if(myRec.resultValue==true) {
		background(192, 255, 192) //Achtergrond wordt zoals een kladpapier geel
		text(myRec.resultString, width/2, height/2) //Veranderd de text naar wat de microfoon ziet
		console.log(myRec.resultString) //Je ziet het resultaat nog een keer in de console
	}
}

function addResult()
let resultText = document.createElement("textarea")
let placing = document.getElementById("micDisplay") 
resultText.innerHTML = myRec.resultString;



//Laad dit bestand zodra de window opstart
window.setup = setup

