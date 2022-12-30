<?php
	//connect to the database
	include "connection.php";
	
	// delete from checklist table
	$CList_ID = $_GET['CList_ID'];

	//delete an entry from the table in the database
	$delete1 = "DELETE FROM CHECKLIST WHERE CList_ID = $CList_ID";

	$sql1 = mysqli_query($conn, $delete1);

	if($sql1) {
		$conn->close();
		header("location:tb1.php");
	} else {
		echo "Failed to delete";
	}

	// delete from course table
	$Crs_ID = $_GET['Crs_ID'];

	//delete an entry from the table in the database
	$delete2 = "DELETE FROM COURSE WHERE Crs_ID = $Crs_ID";

	$sql2 = mysqli_query($conn, $delete2);

	if($sql2) {
		$conn->close();
		header("location:tb2.php");
	} else {
		echo "Failed to delete";
	}

	// delete from instructor table
	$Ins_ID = $_GET['Ins_ID'];

	//delete an entry from the table in the database
	$delete3 = "DELETE FROM INSTRUCTOR WHERE Ins_ID = $Ins_ID";

	$sql3 = mysqli_query($conn, $delete3);

	if($sql3) {
		$conn->close();
		header("location:tb3.php");
	} else {
		echo "Failed to delete";
	}

	// delete from room table
	$Rm_ID = $_GET['Rm_ID'];

	//delete an entry from the table in the database
	$delete4 = "DELETE FROM ROOM WHERE Rm_ID = $Rm_ID";

	$sql4 = mysqli_query($conn, $delete4);

	if($sql4) {
		$conn->close();
		header("location:tb4.php");
	} else {
		echo "Failed to delete";
	}

	// delete from student table
	$Stud_ID = $_GET['Stud_ID'];

	//delete an entry from the table in the database
	$delete5 = "DELETE FROM STUDENT WHERE Stud_ID = $Stud_ID";

	$sql5 = mysqli_query($conn, $delete5);

	if($sql5) {
		$conn->close();
		header("location:tb5.php");
	} else {
		echo "Failed to delete";
	}
?>