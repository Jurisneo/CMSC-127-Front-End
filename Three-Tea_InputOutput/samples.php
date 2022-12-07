<!-- <?php
        if(isset($_POST['search'])){
    
            $valueToSearch = $_POST['valueToSearch'];
            $querySamp = "SELECT * FROM `course` INNER JOIN 'INSTRUCTOR' on COURSE.Ins_ID = INSTRUCTOR.Ins_ID
            INNER JOIN 'ROOM' ON COURSE.Rm_ID = ROOM.Rm_ID WHERE CONCAT(`Crs_Name`, `Ins_LastName`) LIKE '&".$valueToSearch."&'";
            $search_result  = filtertable($querySamp);

            echo"<table border ='1'>";
            echo"<tr><td>Course ID</td><td>Category</td><td>Course Name</td><td>Description</td><td>Component</td><td>Prerequesites</td><td>Units</td><td>Semester Available</td><td>Instructor ID</td><td>Last Name</td><td>First Name</td><td>M.I.</td><td>Sex</td><td>Email</td><td>Room ID</td><td>Room Name</td><td>Building</td></tr>";
            while($row = mysqli_fetch_assoc($search_result)){
                echo"<tr><td>{$row['Crs_ID']}</td><td>{$row['Crs_Categ']}</td><td>{$row['Crs_Name']}</td><td>{$row['Crs_Descrip']}</td><td>{$row['Crs_Comp']}</td><td>{$row['Crs_PreReq']}</td><td>{$row['Crs_Units']}</td><td>{$row['Crs_Sem']}</td><td>{$row['Ins_ID']}</td><td>{$row['Ins_LastName']}</td><td>{$row['Ins_FirstName']}</td><td>{$row['Ins_MiddleIn']}</td><td>{$row['Ins_Sex']}</td><td>{$row['Ins_Email']}</td><td>{$row['Rm_ID']}</td><td>{$row['Rm_Name']}</td><td>{$row['Rm_Bldg']}</td></tr>";
            }

        }else {
            $queryStud = "SELECT * FROM `course`";
            $search_result = filtertable($queryStud);

            echo"<table border ='1'>";
            echo"<tr><td>Course ID</td><td>Category</td><td>Course Name</td><td>Description</td><td>Component</td><td>Prerequesites</td><td>Units</td><td>Semester Available</td></tr>";
            while($row = mysqli_fetch_assoc($search_result)){
                echo"<tr><td>{$row['Crs_ID']}</td><td>{$row['Crs_Categ']}</td><td>{$row['Crs_Name']}</td><td>{$row['Crs_Descrip']}</td>
                <td>{$row['Crs_Comp']}</td><td>{$row['Crs_PreReq']}</td><td>{$row['Crs_Units']}</td><td>{$row['Crs_Sem']}</td></tr>";
            }
        }

        function filtertable ($queryTable){
            $conn = mysqli_connect("localhost", "root", "", "CMSC127_RSC_db");
            $filter_result =  mysqli_query($conn, $queryTable);
            return $filter_result;
        }
?> 
 -->
<?php
        $conn = mysqli_connect("localhost", "root", "", "CMSC127_RSC_db");
        $sql ="SELECT * FROM `course` INNER JOIN 'INSTRUCTOR' on COURSE.Ins_ID = INSTRUCTOR.Ins_ID
        INNER JOIN 'ROOM' ON COURSE.Rm_ID = ROOM.Rm_ID";
        $result =  mysqli_query($conn, $sql);

        echo"<table border ='1'>";
        echo"<tr><td>Course ID</td><td>Category</td><td>Course Name</td><td>Description</td><td>Component</td><td>Prerequesites</td><td>Units</td><td>Semester Available</td><td>Instructor ID</td><td>Last Name</td><td>First Name</td><td>M.I.</td><td>Sex</td><td>Email</td><td>Room ID</td><td>Room Name</td><td>Building</td></tr>";
    while($row = mysqli_fetch_assoc($result)){
    echo"<tr><td>{$row['Crs_ID']}</td><td>{$row['Crs_Categ']}</td><td>{$row['Crs_Name']}</td><td>{$row['Crs_Descrip']}</td>
    <td>{$row['Crs_Comp']}</td><td>{$row['Crs_PreReq']}</td><td>{$row['Crs_Units']}</td><td>{$row['Crs_Sem']}</td>
    <td>{$row['Ins_ID']}</td><td>{$row['Ins_LastName']}</td><td>{$row['Ins_FirstName']}</td><td>{$row['Ins_MiddleIn']}</td>
    <td>{$row['Ins_Sex']}</td><td>{$row['Ins_Email']}</td><td>{$row['Rm_ID']}</td><td>{$row['Rm_Name']}</td><td>{$row['Rm_Bldg']}</td></tr>";
