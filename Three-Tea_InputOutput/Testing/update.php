<?php
{
// Connect to the database
$conn = mysqli_connect('localhost', 'username', 'password', 'CMSC127_RSC_db');

// Retrieve the ID of the row to be deleted
$id = $_GET['id'];

// Delete the row from the table
$query = "DELETE" . " FROM CHECKLIST" . " WHERE id=$id";
mysqli_query($conn, $query);
}
?>