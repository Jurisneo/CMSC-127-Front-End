<?php
	include('connection.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
	$result=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update1.php"?id=<?php echo $id; ?>">
		<label>Firstname:</label><input type="text" value="<?php echo $result['firstname']; ?>" name="firstname">
		<label>Lastname:</label><input type="text" value="<?php echo $result['lastname']; ?>" name="lastname">
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>