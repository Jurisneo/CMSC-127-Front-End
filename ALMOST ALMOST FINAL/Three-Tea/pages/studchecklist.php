<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>BSC</title>
        <link rel="icon" href="imgs/BSC.png" type="image/ico" >
    </head>

    <body>
        <nav class="navBar">
            <div class="navLogo">
                <a href="">B<span>S</span>C</a>
            </div>
            <div class="navLinks">
                <ul>
                    <li><a href="Landing-Stud.php">HOME</a></li>
                    <li><a href="studprofile.php">PROFILE</a></li>
                    <li><a href="studchecklist.php" class="active">CHECKLIST</a></li>
                    <li><a href="addToCheck.php">ENROLL</a></li>
                    <li><a href="studcrs.php">COURSES</a></li>
                </ul>
            </div>
            <div class="navIcons">
                <a href="Landing-Stud.php"><i class='bx bx-arrow-back'></i></a>
                <a href="../index.php"><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>

        <section class="table">
            <div class="tableTitle">
		        <div class="greetings">
                    <?php
                        include "connection.php";
                        $studemail = $_SESSION['Stud_Email'];
                        $nameSearch = "SELECT Stud_FirstName FROM `STUDENT` WHERE Stud_Email='$studemail'";
                        $nameQue = mysqli_query($conn,$nameSearch);
                        $name = mysqli_fetch_assoc($nameQue);
                        echo '<h3> Hello ';
                        echo $name['Stud_FirstName'];
                        echo '! This is your checklist so far.</h3>';
                        echo '<br>';
                    ?>
                </div> 

            <div class="table-wrap">
                <table>
                    <tr>
                        <th>Course Name </th>
                        <th>Course Title</th>
                        <th>Instructor</th>
                        <th>Room</th>
                        <th>Semester</th>
                        <th>Academic Year</th>
                    </tr>

                    <?php
                        include "connection.php";
                        $studemail = $_SESSION['Stud_Email'];

                        
                        $courses = "SELECT COURSE.Crs_Name, COURSE.Crs_Descript, INSTRUCTOR.Ins_LastName, ROOM.Rm_Name, CHECKLIST.CList_SemTaken, CHECKLIST.CList_AcadYear 
                        FROM `CHECKLIST`
                        INNER JOIN `STUDENT` ON CHECKLIST.Stud_ID = STUDENT.Stud_ID
                        INNER JOIN `COURSE` ON CHECKLIST.Crs_ID = COURSE.Crs_ID
                        INNER JOIN `INSTRUCTOR` ON COURSE.Ins_ID = INSTRUCTOR.Ins_ID
                        INNER JOIN `ROOM` ON COURSE.Rm_ID = ROOM.Rm_ID
                        WHERE STUDENT.Stud_Email='$studemail'";
                        $res = mysqli_query($conn,$courses);

                        if(mysqli_num_rows($res) > 0){
                            while($print = mysqli_fetch_assoc($res)){
                        echo '<tr>
                                <td>'. $print['Crs_Name'] . '</td>
                                <td>'. $print['Crs_Descript'] . '</td>
                                <td>'. $print['Ins_LastName'] . '</td>
                                <td>'. $print['Rm_Name'] . '</td>
                                <td>'. $print['CList_SemTaken'] . '</td>
                                <td>'. $print['CList_AcadYear'] . '</td>
                            </tr>';
                        }
                        echo '</table>';
                        } else{
                            echo 
                                "<tr>
                                    <td colspan='6'> No Results Found </td>
                                </tr>
                            </table>";
                        }
                        $conn -> close();
                    ?>
                </table>
            </div>
        </section>
    </body>
</html>