<!DOCTYPE html>
<html style="background-color: #63aed9">
  <head>
    <meta
      charset="UTF-8"
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Connfy PWA</title>
    <link rel="manifest" href="/manifest.json" />
    <link rel="stylesheet" href="/css/stylesheet.css" type="text/css" />
  </head>

  <body>
    <div class="header">
      <header>
        <a href="/pages/index.php">
          <img class="arrow" src="../images/Arrow-left.png" />
        </a>
        <div class="line"></div>
      </header>
    </div>

    <div class="content">
      <img class="logo" src="/images/Connfy.png" />
      <h2 class="titel2">Vergeten?</h2>

      <form action="/pages/email.php" method="POST" id="form">
        <button class="submit gebruikersnaam" style="display: block">Gebruikersnaam</button>
        <button class="submit wachtwoord" style="display: block">Wachtwoord</button>
      </form>
    </div>

    <script src="../js/script.js" type="text/javascript"></script>
  </body>
</html>
