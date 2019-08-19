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

		// add some date thing here
		// $createuser_datemade = 
		
		// add some user checking here



		if($createuser_namecheck){
		// add values to the database

		// $sqlplayersadd = "INSERT INTO deamon_tensei.players (id, username, password, email, admin, lastlogin, ap1, ap2, ap3, ap4, level, exp, hp, str, mag, def, res, agi, luc) VALUES ('$createuser_username','$createuser_password', '$createuser_email', 0, '$createuser_datemade', NULL, NULL, NULL, NULL, 1, 0, 10, 0, 0, 0, 0, 0, 0)";}

		if ($conn->query($sqlplayersadd)) {
			$_SESSION['message'] = "Player has been added.";
		}else{
			$_SESSION['message'] = "An error occured.";
		}
	?>
</body>
