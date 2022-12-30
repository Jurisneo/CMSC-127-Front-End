<?php
    include "connection.php";

    if(isset($_POST['btnSubmit1.2'])){
        $adminnum = $_POST['admin'];
        $adminuname = $_POST['username1.2'];
        $adminpass = $_POST['password1.2'];

        $select = "SELECT * FROM admin_account WHERE Admin_UserName='$adminuname'";
        $search = mysqli_query($conn, $select);
        if (mysqli_num_rows($search) === 1){

            header("Location:LS-Ad.php?error=Username is already taken");
            exit();

        } else {
            $sql1 = "INSERT INTO admin_account (`Admin_Num`, `Admin_UserName`, `Admin_Password`) 
                VALUES ('$adminnum','$adminuname','$adminpass')";

            $result = mysqli_query($conn,$sql1);

            if ($result) {
                $conn -> close();
                header("Location:LS-Ad.php");
                exit();
            } else {
                header("Location:LS-Ad.php?error=Error in creating account");
                die();
            }
        } 
    }
?>