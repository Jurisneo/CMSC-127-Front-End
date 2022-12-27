<?php

// Connect to the database
$conn = mysqli_connect('localhost', 'username', 'password', 'database');

// Check if the ID was passed in the query string
if (isset($_GET['id'])) {
  // Retrieve the ID from the query string
  $id = $_GET['id'];

  // Delete the row from the table
  $query = "DELETE FROM idk WHERE id=$id";
  mysqli_query($conn, $query);

  // Redirect back to the table
  header('Location: filter.php');
}

?>
