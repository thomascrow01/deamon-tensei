
<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// Connected successfully


	// function to retrieve string for specific language
	function script(id, language){
		if($language == NULL){
			$language = "en";
		}
		$script_result = mysql_query("SELECT $language FROM deamon_tensei.languages WHERE id = '$id'");
		if(mysql_fetch_row($script_result) == NULL){
			$script_result = mysql_query("SELECT en FROM deamon_tensei.languages WHERE id = '$id'");
		}
		return mysql_fetch_row($script_result);
	}

	// function to retrieve image of player
	function playerimage($_SESSION["player_ap1"], $_SESSION["player_ap2"], $_SESSION["player_ap3"], $_SESSION["player_ap4"]){
		$img = imagecreatetruecolor(200, 200);
		imagesavealpha($img, true);
		$color = imagecolorallocatealpha($img, 0, 0, 0, 127);
		imagefill($img, 0, 0, $color);
		$text_color = imagecolorallocate($im, 0, 0, 0);
		imagestring($im, 1, 5, 5,  $_SESSION['player_ap1'], $text_color);
		imagestring($im, 1, 5, 10,  $_SESSION['player_ap2'], $text_color);
		imagestring($im, 1, 5, 15,  $_SESSION['player_ap3'], $text_color);
		imagestring($im, 1, 5, 20,  $_SESSION['player_ap4'], $text_color);
		return imagepng($im);
		imagedestroy($im);
	}
?>
