<?php
session_start();
    require('conn.php');
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    // echo $id;
        // If the values are posted, insert them into the database.
	if(isset($_POST['Opslaan'])){


        $text = $_POST['tekst'];   
    //     $image = $_FILES['image'] ['name'];
    //     $folder = "afb/";
    //     move_uploaded_file($_FILES['image']["tmp_name"], "$folder".$image);
		// $target = "afb/".basename($image);
            
        $sql = "INSERT INTO `notes` (tekst) VALUES ('$text')";

        if (mysqli_query($conn, $sql)) {
            $id2 = mysqli_insert_id($conn);
            $_SESSION['noteid'] = $id2;
            
            $sql2 = "INSERT INTO `meeting_notes` (noteid, meetingid) VALUES ('$id2', '$id')";
            $result2 = mysqli_query($conn, $sql2);
            
            echo '<script type="text/javascript">
            window.location = "whiteboard.php?id='.$id.'"
             </script>';
        }
        else{
            echo "Er is iets misgegaan";
            echo $result;
        }
    }
?>

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

    <script src="https://cdn.jsdelivr.net/npm/p5@1.3.1/lib/p5.js"></script>
    <script src="../lib/p5/addons/p5.speech.js"></script>

    <script type="module" src="../js/sketch_knop.js"></script>
  </head>

  <body>
    <div class="header">
      <header>
        <a href="/pages/whiteboard.php">
          <img class="arrow" src="../images/Arrow-left.png" />
        </a>
        <h2 style="color: white; margin-top: -11%; padding-bottom: 2%">
          Tijdens het wandelen
        </h2>
        <div class="line"></div>
      </header>
    </div>

    <div class="Content">
      <form action="" method="POST" id="form">
        <textarea
          class="note"
          id="note"
          name="tekst"
          rows="18"
          cols="45"
        ></textarea>
        <img src="/images/mic-on.svg" alt="Microphone" id="micDisplay" />
        <!-- <input
          class="submit"
          type="submit"
          value="Inspreken"
          name="Inspreken"
          required
        /> -->

        <input
          class="submit"
          type="submit"
          value="Opslaan"
          name="Opslaan"
          required
        />
      </form>
    </div>

    <script src="../js/script.js" type="text/javascript"></script>
  </body>
</html>
