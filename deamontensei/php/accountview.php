<!DOCTYPE html>

<head>
	<title>Deamon Tensei</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<?php
		session_start();
		include 'functions.php';
		
		$login_username = $_POST['username'];
		$login_password = $_POST['password'];
		
		$sql_players = "SELECT * FROM deamon_tensei.players ORDER BY id";
		
		$result_players = $conn->query($sql_players);
		
		// A linear search will check to see if the username and password match any in the database.
		while($row = $result_players->fetch_assoc()) {
				if($row["username"] == $login_username and $row["password"] == $login_password){
					// if true, the session variable "loggedin" will be set to true.
					$_SESSION["loggedin"] = true;
					$_SESSION["player_username"] = $row["username"];
					
					echo "Logged in as " . $_SESSION["player_username"];
					
				}
			}
		$conn->close();
	?>
</body>