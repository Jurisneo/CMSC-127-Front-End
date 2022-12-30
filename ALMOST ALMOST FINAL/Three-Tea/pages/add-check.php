<?php
    include "connection.php";
    session_start();

    if(isset($_POST['ch-btn'])) {
        $checkSN = $_POST['check-SN'];
        $checkCRS = $_POST['check-crs'];
        $checkSem = $_POST['check-sem'];
        $checkAY = $_POST['check-AY'];
        $checkmail = $_SESSION['Stud_Email'];

        // get the student id based on student number 

        $sql = "SELECT Stud_ID FROM `STUDENT` WHERE Stud_Email='$checkmail'";

        // now insert the student id based on the student number
        // and the course id based on the course name
        // and the semester and academic year

        $result = mysqli_query($conn,$sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $sql = $row['Stud_ID'];
        } else {
            header("Location: addToCheck.php?error= failed to search student");
            die();
        }

        // insert the student id, course id, semester, and academic year
        // into the checklist table

        $sql2 = "INSERT INTO `CHECKLIST` (`Stud_ID`, `Crs_ID`, `CList_SemTaken`, `CList_AcadYear`)
        VALUES ('$sql', '$checkCRS', '$checkSem', '$checkAY')";

        $result2 = mysqli_query($conn,$sql2);

        if ($result2) {
            $conn -> close();
            header("Location:studchecklist.php");
        } else {
            header("Location:addToCheck.php?error= failed to insert");
            die();
        }
    }

?>