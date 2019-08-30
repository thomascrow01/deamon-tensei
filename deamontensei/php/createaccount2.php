<!DOCTYPE html>


<head>
	<title>Deamon Tensei</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<?php
		// start a session and include functions.php
		session_start();
		include 'functions.php';

		// add the post values to the variables
		$createuser_username = $_POST['username'];
		$createuser_password = $_POST['password'];
		$createuser_email = $_POST['email'];
		$createuser_namecheck = true
			
		$sql_players = "SELECT * FROM deamon_tensei.players ORDER BY id";
	
		$result_players = $conn->query($sql_players);

		// check if usernames clash
		$checkusername = "SELECT * FROM deamon_tensei.players WHERE username";
      		$checkresult = $conn->query($checkusername);

        	if($checkresult->num_rows > 0) {
        		$createuser_namecheck = true; 
        	}else{
        		$createuser_namecheck = false;
    		}


		if($createuser_namecheck){
		// add values to the database

		$sqlplayersadd = "INSERT INTO deamon_tensei.players (id, username, password, email, admin, datemade, lastlogin, currency1, currency2, ap1, ap2, ap3, ap4, level, exp, hp, str, mag, def, res, agi, luc, savelocation, head, body, legs, feet, hands, armr, arml, ringr, ringl, otherequip) VALUES ('$createuser_username','$createuser_password', '$createuser_email', 0, date("Y-m-d H:i:s"), date("Y-m-d H:i:s"), 0, 0, NULL, NULL, NULL, NULL, 1, 0, 10, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";}

		if ($conn->query($sqlplayersadd)) {
			$_SESSION["message"] = "Player has been added.";
			$_SESSION["username"] = $createuser_username;
			
		}else{
			$_SESSION["message"] = "An error occured.";
		}
	?>
</body>
