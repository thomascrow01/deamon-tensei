<!DOCTYPE html>
<!-- https://www.youtube.com/watch?v=z43rM9gfm2o -->

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
	<div>
		<?php
			if($_SESSION["loggedin"]){
				?>
				<h4>Well you shouldnt be here since youre supposedly logged in.</h4>
				<h5><a href="https://www.youtube.com/watch?v=z43rM9gfm2o">intro music</a></h5>
				<?php
			}else{
				?>
				<form action="accountview.php" method="POST">
					<table>
						<tr>
							<td>User name</td>
							<td><input name="username" type="text"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input name="password" type="text" id="password"></td>
							<script>
								// Change the password to be hidden.
								document.getElementById("password").type = "password";
							</script>
						<tr>
							<td></td>
							<td><input type="submit"></td>
						</tr>
					</table>
				</form>
				<div>
					<div onclick="location.href='createaccount.php';" style="cursor:pointer;">create account</div>
				</div>
				<?php
			}
		?>
	</div>
</body>
