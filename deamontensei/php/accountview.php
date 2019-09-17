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
					
					echo "Logged in as " . $_SESSION["player_username"] . <br>;
				?>
					<table>
				<tr>
					<td><?php script(0, $_SESSION["player_language"]); ?></td>
					<td><p><?php echo $_SESSION["player_hp"]; ?></p></td>
				</tr>
				<tr>
					<td><?php script(1, $_SESSION["player_language"]); ?></td>
					<td><p><?php echo $_SESSION["player_str"]; ?></p></td>
				</tr>
				<tr>
					<td><?php script(2, $_SESSION["player_language"])</td>
					<td><p><?php echo $_SESSION["player_mag"]; ?></p></td>
				</tr>
				<tr>
					<td><?php script(3, $_SESSION["player_language"])</td>
					<td><p><?php echo $_SESSION["player_def"]; ?></p></td>
				</tr>
				<tr>
					<td><?php script(4, $_SESSION["player_language"])</td>
					<td><p><?php echo $_SESSION["player_res"]; ?></p></td>
				</tr>
				<tr>
					<td><?php script(5, $_SESSION["player_language"])</td>
					<td><p><?php echo $_SESSION["player_agi"]; ?></p></td>
				</tr>
				<tr>
					<td><?php script(6, $_SESSION["player_language"])</td>
					<td><p><?php echo $_SESSION["player_luc"]; ?></p></td>
				</tr>
			</table>
				<?php
				}
			}
		$conn->close();
	?>
</body>
