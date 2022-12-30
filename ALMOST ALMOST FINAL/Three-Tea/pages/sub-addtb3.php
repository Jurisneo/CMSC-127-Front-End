<?php
    include "connection.php";

    if(isset($_POST['addtb-btn'])) {
        $insID = $_POST['insID'];
        $insLN = $_POST['insLN'];
        $insFN = $_POST['insFN'];
        $insMI = $_POST['insMI'];
        $insSex = $_POST['insSex'];
        $insEmail = $_POST['insEmail'];

        $sql3 = "INSERT INTO `INSTRUCTOR`(`Ins_ID`, `Ins_LastName`, `Ins_FirstName`, `Ins_MiddleIn`, `Ins_Sex`, `Ins_Email`)
        VALUES ('$insID','$insLN','$insFN','$insMI','$insSex','$insEmail')";

        $result = mysqli_query($conn,$sql3);

        if ($result) {
            $conn -> close();
            header("Location:tb3.php");
        } else {
            die(msqli_error($conn));
        }
    }
?>