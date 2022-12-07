<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "CMSC127_RSC_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>BSC</title>
        <link rel="icon" href="imgs/BSC.png" type="image/ico" >
    </head>
	<body>
		<div class= "searcht">
			<h1>Search Results</h1>	
		</div>
		<div class= "sContainer">
			
	</body>
</html>