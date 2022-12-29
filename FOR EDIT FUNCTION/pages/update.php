<?php
    include "connection.php";

    $Crs_ID = $_GET['Crs_ID'];
    $Crs_Categ = $_GET['Crs_Categ'];
    $Crs_Name = $_GET['Crs_Name'];
    $Crs_Descript = $_GET['Crs_Descript'];
    $Crs_Comp = $_GET['Crs_Comp'];
    $Crs_PreReq = $_GET['Crs_PreReq'];
    $Crs_Units = $_GET['Crs_Units'];
    $Crs_Sem = $_GET['Crs_Sem'];
    $Ins_ID = $_GET['Ins_ID'];
    $Rm_ID = $_GET['Rm_ID'];

    //update an entry from the table in the database
    $sql = "UPDATE COURSE SET Crs_ID = '$Crs_ID', Crs_Categ = '$Crs_Categ', Crs_Name = '$Crs_Name', Crs_Descript = '$Crs_Descript', Crs_Comp = '$Crs_Comp', Crs_PreReq = '$Crs_PreReq', Crs_Units = '$Crs_Units', Crs_Sem = '$Crs_Sem', Ins_ID = '$Ins_ID', Rm_ID = '$Rm_ID' WHERE Crs_ID = '$Crs_ID'";
    $result = mysqli_query($conn, $sql)

    if($result) {
        $conn->close();
        header("Location:./tb2.php");
        exit;
    } else {
        echo "Failed to update";
    }
?>