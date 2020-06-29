<!doctype html> 
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/html.css">
		<title>
			Heading 1 to 6 
		</title>
	</head>
	
	<body>

		<?php
		$servername = "127.0.0.1";
		$username = "root";
		$password = "password";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		/ Check connection
		if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";
		// Made by: Roland Diaz at https://rolandddiaz.joomla.com
		?> 

		<footer>
			<p><a href="https://rolandddiaz.joomla.com/">Made by Roland Diaz</a></p>
		</footer>

	</body>

</html>