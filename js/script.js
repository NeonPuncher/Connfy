//See if the browser supports Service Workers, if so try to register one
if("serviceWorker" in navigator){
    navigator.serviceWorker.register("/service-worker.js").then(function(registering){
      // Registration was successful
      console.log("Browser: Service Worker registration is successful with the scope",registering.scope);
    }).catch(function(error){
      //The registration of the service worker failed
      console.log("Browser: Service Worker registration failed with the error",error);
    });
  } else {
    //The registration of the service worker failed
    console.log("Browser: I don't support Service Workers :(");
  }

let installPrompt; //Variable to store the install action in
let button = document.getElementById("installButton"); //Variable to store html button in

window.addEventListener("beforeinstallprompt",(event)=>{	
  event.preventDefault(); //Prevent the event (this prevents the default bar to show up)
  installPrompt=event; //Install event is stored for triggering it later
  button.style.display = "block"; //Button is now visible
  console.log("App is niet geïnstalleerd, knop is zichtbaar");
});

button.addEventListener("click", (installApp)=>{
  installPrompt.prompt();
  button.style.display = "none"; //Button is now invisible
  console.log("App is aangeklikt, knop is onzichtbaar");

  installPrompt.userChoice.then((choiceResult)=>{
    button.style.display = "none"; //Button is now invisible
    console.log("Installatie is geaccepteerd, knop blijft onzichtbaar");

    if(choiceResult.outcome!=="accepted"){
      //..If it was not accepted to install than show the install button again
      button.style.display = "block"; //Button is now visible
      console.log("Installatie is geweigerd, knop is weer zichtbaar");
    }
    installPrompt=null;
  });
});


//iOS install tip show
const isIOSUsed=()=>{
  const userAgent=window.navigator.userAgent.toLowerCase();
  return /iphone|ipad|ipod/.test(userAgent); //Return if iOS is used (iPhone, iPod or iPad)
}
const standaloneModeActive=()=>("standalone" in window.navigator)&&(window.navigator.standalone); //Will be true if the PWA is used
if(isIOSUsed()&&!standaloneModeActive()){ 
  //Show your install tip for iOS here
  console.log("IOS button exists");
  
  window.addEventListener("beforeinstallprompt",(event)=>{	
    event.preventDefault(); //Prevent the event (this prevents the default bar to show up)
    installPrompt=event; //Install event is stored for triggering it later
    button.style.display = "block"; //Button is now visible
    console.log("App is niet geïnstalleerd, knop is zichtbaar");
  });
  
  button.addEventListener("click", (installApp)=>{
    installPrompt.prompt();
    button.style.display = "none"; //Button is now invisible
    console.log("App is aangeklikt, knop is onzichtbaar");

    installPrompt.userChoice.then((choiceResult)=>{
      button.style.display = "none"; //Button is now invisible
      console.log("Installatie is geaccepteerd, knop blijft onzichtbaar");

      if(choiceResult.outcome!=="accepted"){
        //..If it was not accepted to install than show the install button again
        button.style.display = "block"; //Button is now visible
        console.log("Installatie is geweigerd, knop is weer zichtbaar");
      }
      installPrompt=null;
    });
  });
}

var mic_tracker = 'mic off';
 
function changeMic(){
  var mic = document.getElementById('micDisplay');
  if(mic_tracker=='on'){
    mic.src='/images/mic-off.svg';
    mic_tracker='off';
  }
  else{
    mic.src='/images/mic-on.svg';
    mic_tracker='on';
  }
}