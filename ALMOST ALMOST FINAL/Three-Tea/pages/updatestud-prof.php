<?php
    include "connection.php";

    $Stud_LastName = $_POST['Stud_LastName'];  
    $Stud_FirstName = $_POST['Stud_FirstName'];
    $Stud_MidName = $_POST['Stud_MidName'];
    $Stud_Sex = $_POST['Stud_Sex'];
    $Stud_Year = $_POST['Stud_Year'];
    $Stud_Email = $_POST['Stud_Email'];
    $Stud_PhoneNum = $_POST['Stud_PhoneNum'];

    // update student profile
    $sql = "UPDATE STUDENT SET Stud_LastName = '$Stud_LastName', Stud_FirstName = '$Stud_FirstName', Stud_MidName = '$Stud_MidName', Stud_Sex = '$Stud_Sex', Stud_Year = '$Stud_Year', Stud_Email = '$Stud_Email', Stud_PhoneNum = '$Stud_PhoneNum' 
        WHERE Stud_Email = '$Stud_Email'";
    $result = mysqli_query($conn, $sql);

    if($result) {
        $conn->close();
        header("Location:stud-prof.php");
        exit;
    } else {
        echo "Failed to update";
    }
?>