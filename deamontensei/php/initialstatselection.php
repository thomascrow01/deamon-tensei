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
					<td><?php script(0, $_SESSION["player_language"]); ?></td>
					<td><p><?php echo $_SESSION["player_hp"]; ?> → </p><input name="hp" id="statchoice_hp" type="number" value="<?php echo $_SESSION["player_hp"]; ?>"></td>
				</tr>
				<tr>
					<td><?php script(1, $_SESSION["player_language"]); ?></td>
					<td><p><?php echo $_SESSION["player_str"]; ?> → </p><input name="str" id="statchoice_str" type="number" value="<?php echo $_SESSION["player_str"]; ?>"></td>
				</tr>
				<tr>
					<td><?php script(2, $_SESSION["player_language"])</td>
					<td><p><?php echo $_SESSION["player_mag"]; ?> → </p><input name="mag" id="statchoice_mag" type="number" value="<?php echo $_SESSION["player_mag"]; ?>"></td>
				</tr>
				<tr>
					<td><?php script(3, $_SESSION["player_language"])</td>
					<td><p><?php echo $_SESSION["player_def"]; ?> → </p><input name="def" id="statchoice_def" type="number" value="<?php echo $_SESSION["player_def"]; ?>"></td>
				</tr>
				<tr>
					<td><?php script(4, $_SESSION["player_language"])</td>
					<td><p><?php echo $_SESSION["player_res"]; ?> → </p><input name="res" id="statchoice_res" type="number" value="<?php echo $_SESSION["player_res"]; ?>"></td>
				</tr>
				<tr>
					<td><?php script(5, $_SESSION["player_language"])</td>
					<td><p><?php echo $_SESSION["player_agi"]; ?> → </p><input name="agi" id="statchoice_agi" type="number" value="<?php echo $_SESSION["player_agi"]; ?>"></td>
				</tr>
				<tr>
					<td><?php script(6, $_SESSION["player_language"])</td>
					<td><p><?php echo $_SESSION["player_luc"]; ?> → </p><input name="statchoice_luc" id="luc" type="number" value="<?php echo $_SESSION["player_luc"]; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
