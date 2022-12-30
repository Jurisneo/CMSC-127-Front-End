<?php
    include "connection.php";

    if(isset($_POST['addtb-btn'])){
        $crsID = $_POST['crsID'];
        $crsCateg = $_POST['crsCateg'];
        $crsName = $_POST['crsName'];
        $crsDesc = $_POST['crsDesc'];
        $crsComp = $_POST['crsComp'];
        $crsPR = $_POST['crsPR'];
        $crsUnits = $_POST['crsUnits'];
        $crsSem = $_POST['crsSem'];
        $crsIns = $_POST['crsIns'];
        $crsRm = $_POST['crsRm'];

        $sql1 = "INSERT INTO `COURSE`(`Crs_ID`, `Crs_Categ`, `Crs_Name`, `Crs_Descript`, `Crs_Comp`, `Crs_PreReq`, `Crs_Units`, `Crs_Sem`, `Ins_ID`, `Rm_ID`) 
        VALUES ('$crsID','$crsCateg','$crsName','$crsDesc','$crsComp','$crsPR','$crsUnits','$crsSem','$crsIns','$crsRm')";

        $result = mysqli_query($conn,$sql1);

        if ($result) {
            $conn -> close();
            header("Location:tb2.php");
        } else {
            die(msqli_error($conn));
        } 
    }
?>