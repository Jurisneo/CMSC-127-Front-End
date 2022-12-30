<?php
    include "connection.php";

    $Rm_ID = $_POST['Rm_ID'];
    $Rm_Name = $_POST['Rm_Name'];
    $Rm_Bldg = $_POST['Rm_Bldg'];

    $sql = "UPDATE ROOM SET Rm_ID = '$Rm_ID', Rm_Name = '$Rm_Name', Rm_Bldg = '$Rm_Bldg' 
        WHERE Rm_ID = '$Rm_ID'";

    $result = mysqli_query($conn, $sql);

    if($result) {
        $conn->close();
        header("Location:tb4.php");
        exit;
    } else {
        echo "Failed to update";
    }

?>