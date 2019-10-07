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
		<p>warning do not use real password as this currently unsecure so use a test password or something</p>
		<form action="createaccount2.php" method="POST">
			<table>
				<tr>
					<td>Username</td>
					<td><input name="username" type="text" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input name="password" type="text" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input name="email" type="text"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
