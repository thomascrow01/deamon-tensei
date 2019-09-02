
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

	function script(id, language){
		if($language == NULL){
			$language = "en";
		}
		$script_result = mysql_query("SELECT $language FROM deamon_tensei.languages WHERE id = '$id'");
		return mysql_fetch_row($script_result);
	}
?>
