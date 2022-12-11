<!DOCTYPE html>
<html>
    <head>
    <link href="table.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' href= 'https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;700;900&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap') rel='stylesheet'>
        <link href="style.css"/>
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
                    <li><a href="filter.php" class="active">HOME</a></li>
                    <li><a href="filter.php">COURSES</a></li>
                    <li><a href="filter.php">ABOUT</a></li>
                </ul>
            </div>
            <div class="navIcons">
                <a href=""><i class='bx bx-search-alt' ></i></a>
                <a href=""><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>
       
        <section class="table">
			<div class="tableTitle">
				<a href="filter.php"><h1 class="neon">SEARCH RESULTS</h1></a>
			</div>
            <div class="table-wrap1">
            <table>
                <tr>
                    <th>Student No.</th>
                    <th>Student Surname</th>
                    <th>Course Name</th>
                    <th>Instructor</th>
                    <th>Room</th>
                    <th>Building</th>
                    <th>Semester Taken</th>
                    <th>Acad Year</th>
                </tr>
          <!--   <footer class="footerr">
        <div class="footerr1">
                <div class="footerrLogo">
                    <p>B<span>S</span>C</p>
                </div>
            </div>

            <div class="footerr2">
                <div class="footerrBot">
                    <div class="footerrInf">
                    </div>	
                    <div class="footerrEnd">
                        <p> BSC est. 2022 | All rights reserved — This website is designed and arranged by <span>BARREDO • CONCEPCION • SANTOS</span>.</p>
                    </div>
                </div>
            </div>
        </footer> -->
            <?php
               if (isset($_GET['semTaken']) && isset($_GET['acadYear'])) {
                    $semTaken = $_GET['semTaken'];
                    $acadYear = $_GET['acadYear'];
                    // search in all table columns
                    // using concat mysql function
                    $queryCheck = "SELECT STUDENT.Stud_Num, STUDENT.Stud_LastName, COURSE.Crs_Name, INSTRUCTOR.Ins_LastName, ROOM.Rm_Name, ROOM.Rm_Bldg, CHECKLIST.CList_SemTaken, CHECKLIST.CList_AcadYear
                                FROM CHECKLIST
                                INNER JOIN STUDENT ON CHECKLIST.Stud_ID = STUDENT.Stud_ID
                                INNER JOIN COURSE ON CHECKLIST.Crs_ID = COURSE.Crs_ID
                                INNER JOIN INSTRUCTOR ON COURSE.Ins_ID = INSTRUCTOR.Ins_ID
                                INNER JOIN ROOM ON COURSE.Rm_ID = ROOM.Rm_ID 
                                WHERE CHECKLIST.CList_SemTaken = '$semTaken' 
                                AND CHECKLIST.CList_AcadYear = '$acadYear'";
                    $search_result = filterTable($queryCheck);
                }
                else {
                    $queryCheckTable = "SELECT STUDENT.Stud_Num, STUDENT.Stud_LastName, COURSE.Crs_Name, INSTRUCTOR.Ins_LastName, ROOM.Rm_Name, ROOM.Rm_Bldg, CHECKLIST.CList_SemTaken, CHECKLIST.CList_AcadYear
                    FROM CHECKLIST
                    INNER JOIN STUDENT ON CHECKLIST.Stud_ID = STUDENT.Stud_ID
                    INNER JOIN COURSE ON CHECKLIST.Crs_ID = COURSE.Crs_ID
                    INNER JOIN INSTRUCTOR ON COURSE.Ins_ID = INSTRUCTOR.Ins_ID
                    INNER JOIN ROOM ON COURSE.Rm_ID = ROOM.Rm_ID";
                    $search_result = filterTable($queryCheckTable);
                }

                // function to connect and execute the query
                function filterTable($queryCheck)
                {
                    include "connection.php";
                    $filter_Result = mysqli_query($conn, $queryCheck);
                    return $filter_Result;
                }

                if ($search_result-> num_rows> 0) {
                    while ($row = $search_result -> fetch_assoc()) {
                        echo 
                            "<tr>
                                <td>". $row["Stud_Num"] . "</td>
                                <td>". $row["Stud_LastName"] ."</td>
                                <td>". $row["Crs_Name"] ."</td>
                                <td>". $row["Ins_LastName"] ."</td>
                                <td>". $row["Rm_Name"] ."</td>
                                <td>". $row["Rm_Bldg"] ."</td>
                                <td>". $row["CList_SemTaken"] ."</td>
                                <td>". $row["CList_AcadYear"] ."</td>
                            </tr>";
                    }
                    echo "</table>";
                } else {
                	echo 
						"<tr>
							<td colspan='5'> No Results Found </td>
							</tr>
						</table>";
                }
                $conn-> close();
                
            ?>
            <?php
            echo "The time is " . date("h:i:sa");
            ?>
	    </table>
    </body>
</html>
