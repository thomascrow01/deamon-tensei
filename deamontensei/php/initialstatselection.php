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
		
		$sql_players = "SELECT * FROM deamon_tensei.players ORDER BY id";
		
		$result_players = $conn->query($sql_players);
		
		while($row = $result_players->fetch_assoc()) {
				if($row["username"] == $_SESSION["player_username"]){
					// find the id that matches the new username
					$_SESSION["player_id"] = $row["id"];
					$_SESSION["player_hp"] = $row["hp"];
					$_SESSION["player_str"] = $row["str"];
					$_SESSION["player_mag"] = $row["mag"];
					$_SESSION["player_def"] = $row["def"];
					$_SESSION["player_res"] = $row["res"];
					$_SESSION["player_agi"] = $row["agi"];
					$_SESSION["player_luc"] = $row["luc"];
				}
			}
		
	?>
	<h1><?php echo $_SESSION['message']; $_SESSION['message'] = NULL; ?></h1>
	<div>
		<form action="testscreen.php" method="POST">
			<table>
				<tr>
					<td>ap1</td>
					<td><input name="ap1" type="radio" value="0" checked><input name="ap1" type="radio" value="1"></td>
				</tr>
				<tr>
					<td>ap2</td>
					<td><input name="ap2" type="radio" value="0" checked><input name="ap2" type="radio" value="1"><input name="ap2" type="radio" value="2" checked><input name="ap2" type="radio" value="3"></td>
				</tr>
				<tr>
					<td>ap3</td>
					<td><input name="ap3" type="radio" value="0" checked><input name="ap3" type="radio" value="1"><input name="ap3" type="radio" value="2" checked><input name="ap3" type="radio" value="3"></td>
				</tr>
				<tr>
					<td>ap4</td>
					<td><input name="ap4" type="radio" value="0" checked><input name="ap4" type="radio" value="1"><input name="ap4" type="radio" value="2" checked><input name="ap4" type="radio" value="3"></td>
				</tr>
				<br>
				<tr>
					<td><?php script(0, $_SESSION["player_language"]) ?></td>
					<td><p><?php echo $_SESSION["player_hp"]; ?></p><input name="hp" id="hp" type="number"></td>
				</tr>
				<tr>
					<td>str</td>
					<td><p></p><input name="str" id="str" type="number"></td>
				</tr>
				<tr>
					<td>mag</td>
					<td><p></p><input name="mag" id="mag" type="number"></td>
				</tr>
				<tr>
					<td>def</td>
					<td><p></p><input name="def" id="def" type="number"></td>
				</tr>
				<tr>
					<td>res</td>
					<td><p></p><input name="res" id="res" type="number"></td>
				</tr>
				<tr>
					<td>agi</td>
					<td><p></p><input name="agi" id="agi" type="number"></td>
				</tr>
				<tr>
					<td>luc</td>
					<td><p></p><input name="luc" id="luc" type="number"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
