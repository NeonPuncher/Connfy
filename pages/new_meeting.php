<?php
session_start();
    require('conn.php');

        // If the values are posted, insert them into the database.
	if(isset($_POST['VerderMeeting'])){
        $naam = $_POST['naam'];
        $aantal = $_POST['aantal'];
        $lengte = $_POST['lengte'];

            
        $sql = "INSERT INTO `meeting` (naam, aantal, lengte) VALUES ('$naam','$aantal', '$lengte')";
        // $result = mysqli_query($conn, $sql);

        if (mysqli_query($conn, $sql)) {
            $id = mysqli_insert_id($conn);

            // $_SESSION['meetingid'] = $id;

            echo '<script type="text/javascript">
            window.location = "record.php?id='.$id.'"
            </script>';

        }
        else{
            echo "Er is iets misgegaan";
            echo $result;
        }
    }
?>

<!DOCTYPE html>
<html style="background-color: #63aed9">
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
        <a href="/pages/meetings.php">
          <img class="arrow" src="../images/Arrow-left.png" />
        </a>
        <div class="line"></div>
      </header>
    </div>

    <div class="content">
      <img class="logo" src="../images/Connfy.png" />

      <form action="" method="POST">
        <h2 style="font-weight: 400">Naam van meeting:</h2>
        <input
          class="input"
          type="text"
          name="naam"
          placeholder="Naam meeting"
        /><br />
        <h2 style="font-weight: 400">Aantal deelnemers</h2>
        <input
          class="input"
          type="number"
          name="aantal"
          placeholder="Aantal deelnemers"
        />
        <br />

        <h2 style="font-weight: 400">Verwachtte duur meeting:</h2>

        <input
          class="input"
          type="number"
          name="lengte"
          placeholder="Verwachtte tijd in minuten"
        />
        <br />

        <input
          href="pages.html"
          class="submit"
          type="submit"
          value="Verder"
          name="VerderMeeting"
          required
        />
      </form>
    </div>

    <script src="../js/script.js" type="text/javascript"></script>
  </body>
</html>
