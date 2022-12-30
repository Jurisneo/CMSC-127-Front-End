<?php
    include "connection.php";

    $Crs_ID = $POST['Crs_ID'];
    $Crs_Categ = $POST['Crs_Categ'];
    $Crs_Name = $POST['Crs_Name'];
    $Crs_Descript = $POST['Crs_Descript'];
    $Crs_Comp = $POST['Crs_Comp'];
    $Crs_PreReq = $POST['Crs_PreReq'];
    $Crs_Units = $POST['Crs_Units'];
    $Crs_Sem = $POST['Crs_Sem'];
    $Ins_ID = $POST['Ins_ID'];
    $Rm_ID = $POST['Rm_ID'];

    //update an entry from the table in the database
    $Ins_LastName = "SELECT Ins_LastName FROM INSTRUCTOR WHERE Ins_LastName = '$Ins_ID'";
    $Rm_Name = "SELECT Rm_Name FROM ROOM WHERE Rm_Name = '$Rm_ID'";

    $sql = "UPDATE COURSE SET Crs_ID = '$Crs_ID', Crs_Categ = '$Crs_Categ', Crs_Name = '$Crs_Name', Crs_Descript = '$Crs_Descript', Crs_Comp = '$Crs_Comp', Crs_PreReq = '$Crs_PreReq', Crs_Units = '$Crs_Units', Crs_Sem = '$Crs_Sem', Ins_LastName = '$Ins_LastName', Rm_Name = '$Rm_Name' 
        WHERE Crs_ID = '$Crs_ID'";
    $result = mysqli_query($conn, $sql);

    if($result) {
        $conn->close();
        header("Location:tb2.php");
        exit;
    } else {
        echo "Failed to update";
    }
?>