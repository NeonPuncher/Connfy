const lang = navigator.language || 'nl-NL' //Stel taal in waarop hij moet focusen
const myRec = new p5.SpeechRec(lang) // nieuwe P5.SpeechRec object aanmaken
let buttonMic;

function setup()
{
	// Geef instructies hoe het eruit moet komen te zien:
	buttonMic = createButton('Inspreken')
	buttonMic.position(140, 530)
	buttonMic.style('width', '26%')
	buttonMic.style('height', '5%')
	buttonMic.style('font-size', '15px')
	buttonMic.style('color', '#414042')
	buttonMic.style('background-color', '#e79f37')
	buttonMic.style('border-radius', '1rem')
	buttonMic.style('border', '0 solid #414042')
	myRec.onResult = addResult

	//Functie die het recorden van je stem start
	function startRec(){
		myRec.start()
		changeMic()
	}

	//Wanneer de knop wordt gedrukt begint hij met recorden
	buttonMic.mousePressed(startRec)
}


function addResult(){
	const resultText = document.getElementById("note")
	resultText.innerHTML = myRec.resultString
	document.getElementById("micDisplay").style.webkitFilter = "opacity(0%)" 
}

function changeMic(){
	document.getElementById("micDisplay").style.webkitFilter = "opacity(100%)"
}

//Laad dit bestand zodra de window opstart
window.setup = setup

