<?php
session_start();
    require('conn.php');
    
?>

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
      <div class="block" id="block"></div>
                  <table id="connfy">
                  <tr><th>ID</th><th>naam</th><th>aantal</th><th>lengte</th><th>route</th></tr>
                  
                  <?php

              $sql="SELECT * FROM meeting";
              $result=mysqli_query($conn, $sql);
              while($row=mysqli_fetch_row($result))
              {
                echo '<tr>';
                echo '<td>'. $row[0] . '</td>';
                echo '<td>'. $row[1] . '</td>';
                echo '<td>'. $row[2] . '</td>';	
                    echo '<td>'. $row[3] . '</td>';	
                    echo '<td>'. $row[4] . '</td>';	
                    echo '<td><a href="lijst.php?id='.$row[0].'"><button class="button_style1">bijwerken</button></a></td>';
                    echo '</tr>';
              }
                 

                ?>
                </table>
      <input
        onclick="createNote()"
        href="#"
        class="submit"
        style="width: auto"
        type="submit"
        value="Nieuwe Meeting"
        name="NieuweMeeting"
        required
      />
    </div>

    <script src="../js/script.js" type="text/javascript"></script>
  </body>
</html>
