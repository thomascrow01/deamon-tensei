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
					$_SESSION["player_id"] = $row["id"];
					$_SESSION["player_hp"] = $row["hp"];
					$_SESSION["player_str"] = $row["str"];
					$_SESSION["player_mag"] = $row["mag"];
					$_SESSION["player_def"] = $row["def"];
					$_SESSION["player_res"] = $row["res"];
					$_SESSION["player_agi"] = $row["agi"];
					$_SESSION["player_luc"] = $row["luc"];
					$_SESSION["player_ap1"] = $row["ap1"];
					$_SESSION["player_ap2"] = $row["ap2"];
					$_SESSION["player_ap3"] = $row["ap3"];
					$_SESSION["player_ap4"] = $row["ap4"];
					
					echo "Logged in as " . $_SESSION["player_username"] . "<br>" .
				"
					<table>
				<tr>
					<td>hp</td>
					<td><p>" . $_SESSION["player_hp"] . "</p></td>
				</tr>
				<tr>
					<td>str</td>
					<td><p>". $_SESSION["player_str"]."</p></td>
				</tr>
				<tr>
					<td>mag</td>
					<td><p>". $_SESSION["player_mag"]."</p></td>
				</tr>
				<tr>
					<td>def</td>
					<td><p>". $_SESSION["player_def"]."</p></td>
				</tr>
				<tr>
					<td>res</td>
					<td><p>". $_SESSION["player_res"]."</p></td>
				</tr>
				<tr>
					<td>agi</td>
					<td><p>". $_SESSION["player_agi"]."</p></td>
				</tr>
				<tr>
					<td>luc</td>
					<td><p>". $_SESSION["player_luc"]."</p></td>
				</tr>
			</table>";
				}
			}
		$conn->close();
	?>
</body>
