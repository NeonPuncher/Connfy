<?php
session_start();
    require('conn.php');

    // if(isset("NieuweMeeting")){
    //   echo '<script type="text/javascript">
    //         window.location = "new_meeting.php"
    //          </script>';
    // }
    
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
        <a href="/pages/meetings.php">
          <img class="arrow" src="../images/Arrow-left.png" />
        </a>
        <div class="line"></div>
      </header>
    </div>

    <div class="content">
      <div class="block" id="block">
                  <!-- <table id="connfy">
                  <tr><th>ID</th><th>naam</th><th>aantal</th><th>lengte</th><th>route</th></tr> -->
                  
                  <?php

              $sql="SELECT * FROM meeting";
              $result=mysqli_query($conn, $sql);
              while($rows=mysqli_fetch_row($result))
              { 

                echo "<a href='whiteboard.php'> <div class='textbox'>". $rows[1] ."</div></a>";

               
              }
                 

                ?>
                </div>
                <!-- </table> -->
      <input
        onclick="location.href = 'new_meeting.php';"
        href="new_meeting.php"
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


 <!-- echo "<script>

            
//                   let newDiv = document.createElement('div');
//                   newDiv.className = 'textbox';
//                   newDiv.setAttribute('onclick', 'toPage()');
                 
                
//                   let titel = document.createElement('h2');
//                   let titelText = document.createTextNode(
//                     ". $row[1] . " + aantalMeetings
//                   );
//                   titel.appendChild(titelText);
//                   newDiv.appendChild(titel);
            
//                   let block = document.getElementById('block');
//                   block.appendChild(newDiv);
//                 }
            
//                 function toPage() {
//                   location.href='https://www.google.com/';
//                 }
//               </script>"; -->