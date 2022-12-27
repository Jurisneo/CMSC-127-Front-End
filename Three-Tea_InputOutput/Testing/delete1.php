<?php
	$id=$_GET['id'];
	include('connection.php');
	mysqli_query($conn,"delete from `user` where userid='$id'");
	header('location:index.php');
?>