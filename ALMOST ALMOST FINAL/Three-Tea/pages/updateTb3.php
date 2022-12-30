<?php
    include "connection.php";

    $Ins_ID = $_POST['Ins_ID'];
    $Ins_LastName = $_POST['Ins_LastName'];
    $Ins_FirstName = $_POST['Ins_FirstName'];
    $Ins_MiddleIn = $_POST['Ins_MiddleIn'];
    $Ins_Sex = $_POST['Ins_Sex'];
    $Ins_Email = $_POST['Ins_Email'];

    $sql = "UPDATE INSTRUCTOR SET Ins_ID = '$Ins_ID', Ins_LastName = '$Ins_LastName', Ins_FirstName = '$Ins_FirstName', Ins_MiddleIn = '$Ins_MiddleIn', Ins_Sex = '$Ins_Sex', Ins_Email = '$Ins_Email' 
        WHERE Ins_ID = '$Ins_ID'";

    $result = mysqli_query($conn, $sql);

    if($result) {
        $conn->close();
        header("Location:tb3.php");
        exit;
    } else {
        echo "Failed to update";
    }
?>