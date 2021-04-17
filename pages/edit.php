<!DOCTYPE html>
<html>
  <head>
    <meta
      charset="UTF-8"
      name="viewport"
      http-equiv="X-UA-Compatible"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Connfy PWA</title>
    <link rel="manifest" href="/manifest.json" />
    <link rel="stylesheet" href="/css/stylesheet.css" type="text/css" />
  </head>

  <body>
    <div class="header">
      <header>
        <a href="/index.html">
          <img class="arrow" src="../images/Arrow-left.png" />
        </a>
        <h2 style="color: white; margin-top: -11%; padding-bottom: 2%">
          Notitie bewerken
        </h2>
        <div class="line"></div>
      </header>
    </div>

    <div class="Content">
      <form action="" method="POST" id="form">
        <textarea
          class="note"
          id="note"
          name="note"
          rows="18"
          cols="45"
        ></textarea>
        <p class="titel">Nieuwe afbeelding uploaden:</p>
        <input type="file" class="file" name="filename" />

        <input
          class="submit"
          type="submit"
          value="Opslaan"
          name="OpslaanEdit"
          required
        />

        <input
          class="submit"
          type="submit"
          value="Naar whiteboard"
          name="NaarWhiteboard"
          required
        />
      </form>
    </div>

    <script src="../js/script.js" type="text/javascript"></script>
  </body>
</html>
