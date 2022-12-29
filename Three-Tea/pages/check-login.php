<?php 
session_start(); 
include "connection.php";

if (isset($_POST['username2']) && isset($_POST['password2'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $username = validate($_POST['username2']);
    $password = validate($_POST['password2']);

    if (empty($username)) {
        header("Location: LS-Stud.php?error=User Name is required");
        exit();
    }else if(empty($password)){
        header("Location: LS-Stud.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT Stud_UserName, Stud_Password FROM student_account WHERE Stud_UserName='$username' AND Stud_Password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Stud_UserName'] === $username && $row['Stud_Password'] === $password) {
                echo "Logged in!";
                $_SESSION['Stud_UserName'] = $row['Stud_UserName'];
                $_SESSION['Stud_Email'] = $row['Stud_Email'];
                header("Location: Landing-Stud.php");
                exit();
            }else{
                header("Location: LS-Stud.php?error=Incorect Username or password");
                exit();
            }
        }else{
            header("Location: LS-Stud.php?error=Incorect User name or password");
            exit();
        }
    }
}else{
    header("Location: LS-Stud.php");
    exit();
}
?>