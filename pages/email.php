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
        <a href="/index.html">
          <img class="arrow" src="../images/Arrow-left.png" />
        </a>
        <div class="line"></div>
      </header>
    </div>

    <div class="content">
      <img class="logo" src="/images/Connfy.png" />

      <form action="" method="POST">
        <h2 class="spacing" style="font-weight: 400">Gebruikersnaam:</h2>
        <input
          class="input"
          type="text"
          name="username"
          placeholder="Gebruikersnaam"
        /><br />
        <h2 style="font-weight: 400">Wachtwoord:</h2>
        <input
          class="input"
          type="password"
          name="pass"
          placeholder="Wachtwoord"
        />
        <br />

        <input
          class="submit"
          type="submit"
          value="Verder"
          name="submit"
          required
        />
      </form>
    </div>

    <script src="../js/script.js" type="text/javascript"></script>
  </body>
</html>