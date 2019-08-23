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
	<video id="video" autoplay>
		<source src="../intro_assets/SKZ51LfkKC.mp4" type="video/mp4">
	</video>
	<audio id="audio" autoplay>
		<source src="../intro_assets/videoplayback_2.mp3" type="audio/mpeg">
	</audio>
	<script>
		document.getElementById('video').play();
		document.getElementById('audio').play();
	</script>
</body>
