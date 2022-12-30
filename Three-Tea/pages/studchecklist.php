<?php
    session_start();

    


?>
<!DOCTYPE html>
<html>
<head>
<title>CHECKLIST Table</title>
<title>Table with database</title>
        <link href="../style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>BSC</title>
        <link rel="icon" href="imgs/BSC.png" type="image/ico" >
</head>

    <body>
    <table>
    <tr>
        <style>
    table {
border-collapse: collapse;
width: 75%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
border: 1px solid #333;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child() {background-color: #f2f2f2}

.greeting{
    width: 70%;
    height: 10%;
    position: absolute;
    bottom: 65%;
    text-align: center;
}
.greeting h3{
    font-family: 'Work Sans', sans-serif;
    font-size: 200%;
}
</style>

<nav class="navBar">
            <div class="navLogo">
                <a href="">B<span>S</span>C</a>
            </div>
            <div class="navLinks">
                <ul>
                    <li><a href="" >HOME</a></li>
                    <li><a href="tb1.php">CHECKLIST</a></li>
                    <li><a href="tb2.php" class="active">COURSE</a></li>
                    <li><a href="tb3.php">INSTRUCTOR</a></li>
                    <li><a href="tb4.php">ROOM</a></li>
                    <li><a href="tb5.php">STUDENT</a></li>
                </ul>
            </div>

            <div class="navIcons">
                <a href="filter.php"><i class='bx bx-search-alt' ></i></a>
                <a href=""><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>
        <div class="greeting">
            <?php
            include "connection.php";
            $studemail = $_SESSION['Stud_Email'];
            $nameSearch = "SELECT Stud_FirstName FROM STUDENT WHERE Stud_Email='$studemail'";
            $nameQue = mysqli_query($conn,$nameSearch);
            $name = mysqli_fetch_assoc($nameQue);
            echo '<h3> Hello ';
            echo $name['Stud_FirstName'];
            echo '! This is your CHECKLIST so far.</h3>';
            echo '<br>';
            ?>
        </div>
        <th>COURSE Name </th>
        <th>COURSE Title</th>
        <th>INSTRUCTOR</th>
        <th>ROOM</th>
        <th>Semester</th>
        <th>Academic Year</th>
    </tr>
    <?php
    ?>
    <footer class="footer">
            <div class="footer1">
                <div class="footerLogo">
                    <p>B<span>S</span>C</p>
                </div>
            </div>

            <div class="footer2">
                <div class="footerBot">
                    <div class="footerInf">
                        <p>BSC est. 2022 | All rights reserved</p>
                    </div>	
                    <div class="footerEnd">
                        <p>This website is designed and arranged by <span>BARREDO • CONCEPCION • SANTOS</span>.</p>
                    </div>
                </div>
            </div>
        </footer>
			<tbody>

            <?php
            include "connection.php";
            $studemail = $_SESSION['Stud_Email'];

            
            $COURSEs = "SELECT COURSE.Crs_Name, COURSE.Crs_Descript, INSTRUCTOR.Ins_LastName, ROOM.Rm_Name, CHECKLIST.CList_SemTaken, CHECKLIST.CList_AcadYear 
            FROM CHECKLIST
            INNER JOIN `STUDENT` ON CHECKLIST.Stud_ID = STUDENT.Stud_ID
            INNER JOIN `COURSE` ON CHECKLIST.Crs_ID = COURSE.Crs_ID
            INNER JOIN `INSTRUCTOR` ON COURSE.Ins_ID = INSTRUCTOR.Ins_ID
            INNER JOIN `ROOM` ON COURSE.Rm_ID = ROOM.Rm_ID
            WHERE STUDENT.Stud_Email='$studemail'";
            $res = mysqli_query($conn,$COURSEs);

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
                echo "<tr>
                        <td colspan='8'> No Results Found </td>
                    </tr>
                    </table>";
            }
        ?>
			</tbody>
		</table>
	</div>
</body>
</html>