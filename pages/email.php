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
        <a href="/pages/vergeten.php">
          <img class="arrow" src="../images/Arrow-left.png" />
        </a>
        <div class="line"></div>
      </header>
    </div>

    <div class="content">
      <img class="logo" src="/images/Connfy.png" />
      <h2 class="titel2">Vul je e-mailadres in</h2>

      <form action="" method="POST">
        <h2 class="spacing" style="font-weight: 400">E-mail:</h2>
        <input
          class="input"
          type="text"
          name="email"
          placeholder="E-mail"
          required
        />
        <br />

        <input
          class="submit"
          type="submit"
          value="Verzenden"
          name="verzenden"
          required
        />
      </form>
    </div>

    <script src="../js/script.js" type="text/javascript"></script>
  </body>
</html>
