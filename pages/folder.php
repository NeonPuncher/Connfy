<!DOCTYPE html>
<html style="background-color: #e5e5e5">
  <head>
    <link rel="manifest" href="../manifest.json" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Connfy PWA</title>

    <link rel="stylesheet" href="../css/stylesheet.css" type="text/css" />
  </head>

  <body>
    <div class="header">
      <header>
        <a href="../index.html">
          <img class="arrow" src="../images/Arrow-left.png" />
        </a>
        <div class="line"></div>
      </header>
    </div>

    <div class="content">
      <div class="block" id="block">
        <script>
          let aantalNotities = 0;
          function createNote() {
            aantalNotities++;

            let newDiv = document.createElement("div");
            newDiv.className = "textbox";
            newDiv.setAttribute("onclick", consolelog());

            let titel = document.createElement("h2");
            let titelText = document.createTextNode(
              "Notitie " + aantalNotities
            );
            titel.appendChild(titelText);
            newDiv.appendChild(titel);

            let notitie = document.createElement("p");
            let notitieText_ =
              "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nam! Deserunt, maiores magnam asperiores eum dolorem debitis minus vitae corrupti. Porro numquam consequatur incidunt unde ratione sapiente est ipsum eius?";
            let notitieText = document.createTextNode(notitieText_);
            notitie.appendChild(notitieText);
            newDiv.appendChild(notitie);

            let block = document.getElementById("block");
            block.appendChild(newDiv);
          }

          function consolelog() {
            console.log("HIJ GEEFT IETS MEE");
          }
        </script>
      </div>

      <input
        onclick="createNote()"
        href="#"
        class="submit"
        style="width: auto"
        type="submit"
        value="Nieuwe Notitie"
        name="NieuweNotitie"
        required
      />
    </div>

    <script src="../js/script.js" type="text/javascript"></script>
  </body>
</html>