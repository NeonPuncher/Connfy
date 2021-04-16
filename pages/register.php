<?php
	require('conn.php');
    // If the values are posted, insert them into the database.
	if(isset($_POST['submit'])){
        $username = $_POST["username"];
		$email = $_POST["email"];
        $password = $_POST["password"];

		$select = "SELECT username FROM user WHERE username='$username'";	
		$select2 = "SELECT username FROM user WHERE email='$email'";	
		$results = mysqli_query($conn, $select);
		$results2 = mysqli_query($conn, $select2);
	if (mysqli_num_rows($results) > 0) {
		$Fout2 = "Dit emailadres is al in gebruik, heeft u al een account? klik dan <a href='login.php'>hier</a> om in te loggen!"; 
		$Fout = "Deze gebruikersnaam is al in gebruik, heeft u al een account? klik dan <a href='login.php'>hier</a> om in te loggen!"; 
	}else{
        $sql = "INSERT INTO `user` (username, pass, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($conn, $sql);

    if($result){
            header("Location: login.php");
	}else{
		echo 'er is iets mis gegaan';	
		}

    }
		}

    ?>
<html> 

	<head>
	<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>

<body>

      <form name="register" method="POST" action="">

	  <input type="text" name="username" placeholder="Gebruikersnaam">
		<?php if (isset($Fout)): ?>
			<span><?php echo $Fout; ?></span>
		<?php endif ?>
		
        <input type="email" name="email"  placeholder="Email adres*" required autofocus/> <br>
		<?php if (isset($Fout2)): ?>
			<span><?php echo $Fout2; ?></span>
		<?php endif ?>
        <input type="text" name="pass"  placeholder="Wachtwoord*" required/> <br>

		<input type="submit" value="Registreren" name="submit">
		
      </form>
	</body>

</html>