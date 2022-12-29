<?php
    include "connection.php";

    if(isset($_POST['signup-btn'])){
        $studnum = $_POST['studSN'];
        $lastname = $_POST['studLN'];
        $firstname = $_POST['studFN'];
        $midname = $_POST['studMN'];
        $sex = $_POST['studSex'];
        $studyear = $_POST['studYear'];
        $studemail = $_POST['studEA'];
        $studphonenum = $_POST['studPN'];
        $studuname = $_POST['studUN'];
        $studpass = $_POST['studPW'];

        $sql1 = "INSERT INTO `STUDENT`(`Stud_Num`, `Stud_LastName`, `Stud_FirstName`, `Stud_MidName`, `Stud_Sex`, `Stud_Year`, `Stud_Email`, `Stud_PhoneNum`) VALUES ('$studnum','$lastname','$firstname','$midname','$sex','$studyear','$studemail','$studphonenum')";

        $result = mysqli_query($conn,$sql1);

        if ($result) {
            $sql2 = "INSERT INTO `student_account`(`Stud_UserName`, `Stud_Password`, `Stud_Email`) VALUES ('$studuname','$studpass','$studemail')";
            $result2 = mysqli_query($conn,$sql2);
            $conn -> close();
            header("Location: LS-stud.php");
        } else {
            die(msqli_error($conn));
        } 
    }
?>