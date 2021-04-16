<?php

session_start();
include('conn.php');

if(isset($_POST['VerderLogin'])){



$username = $_POST['username'];
$password = $_POST['pass'];



$username = stripcslashes($username);
$password = stripcslashes($password);

//zoekt de naam en wachtwoord op uit de database
$sql = "SELECT userid, username, pass FROM user WHERE username='$username' AND pass='$password'";
$result = mysqli_query($conn, $sql);
//zet de resultaten in $row
$row = mysqli_fetch_array($result);

$id = $row['userid'];   

//controlleert of dezelfde rows de juiste gegevens hebben
if ($row['username'] == $username && $row['pass'] == $password){

    //zet de gebruikersnaam in een sessie waardoor deze ondhouden blijft
    // $_SESSION['userid'] = $id;

    echo $id;
    //verwijst door naar de home.php
    echo '<script type="text/javascript">
    window.location = "meeting.php"
</script>';

// ?$id='.$row["userid"].'
}
else{
    echo "verkeerde gebruikersnaam of wachtwoord";
    // echo $result;
}
}

?>

<!DOCTYPE html>
<html style="background-color: #6e9fbc">
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
        <img class="arrow" src="../images/Arrow-left.png" />
        <div class="line"></div>
      </header>
    </div>

    <div class="content">
      <img class="logo" src="../images/Connfy.png" />

      <form action="" method="POST">
        <h2 style="font-weight: 400">Gebruikersnaam:</h2>
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
          name="VerderLogin"
          required
        />
      </form>
    </div>

    <script src="../js/script.js" type="text/javascript"></script>
  </body>
</html>
