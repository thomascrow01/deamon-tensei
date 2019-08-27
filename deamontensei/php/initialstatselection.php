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
					<td>hp</td>
					<td></td>
				</tr>
				<tr>
					<td>str</td>
					<td></td>
				</tr>
				<tr>
					<td>mag</td>
					<td></td>
				</tr>
				<tr>
					<td>def</td>
					<td></td>
				</tr>
				<tr>
					<td>res</td>
					<td></td>
				</tr>
				<tr>
					<td>agi</td>
					<td></td>
				</tr>
				<tr>
					<td>luc</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
