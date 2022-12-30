<?php
    include "connection.php";

    if(isset($_POST['addtb-btn4'])) {
        $rmID = $_POST['rmID'];
        $rmName = $_POST['rmName'];
        $rmBldg = $_POST['rmBldg'];

        $sql4 = "INSERT INTO `ROOM`(`Rm_ID`, `Rm_Name`, `Rm_Bldg`) 
        VALUES ('$rmID','$rmName','$rmBldg')";
        
        $result = mysqli_query($conn,$sql4);

        if ($result) {
            $conn -> close();
            header("Location:tb4.php");
        } else {
            die(msqli_error($conn));
        }
    }
?>