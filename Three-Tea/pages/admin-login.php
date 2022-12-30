<?php 
session_start(); 
include "connection.php";
if (isset($_POST['usernamelog']) && isset($_POST['passwordlog'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $username = validate($_POST['usernamelog']);
    $password = validate($_POST['passwordlog']);
    if (empty($username)) {
        header("Location: LS-Ad.php?wrong=User Name is required");
        exit();
    }else if(empty($password)){
        header("Location: LS-Ad.php?wrong=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM admin_account WHERE Admin_UserName='$username' AND Admin_Password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Admin_UserName'] === $username && $row['Admin_Password'] === $password) {
                echo "Logged in!";
                $_SESSION['Admin_UserName'] = $row['Admin_UserName'];
                $_SESSION['Admin_Num'] = $row['Admin_Num'];
                header("Location: Landing-Ad.php");
                exit();
            }else{
                header("Location: LS-Ad.php?wrong=Incorect Username or password");
                exit();
            }
        }else{
            header("Location: LS-Ad.php?wrong=Incorect User name or password");
            exit();
        }
    }
}else{
    header("Location: LS-Ad.php");
    exit();
}