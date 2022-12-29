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
                    <li><a href="" class="active">HOME</a></li>
                    <li><a href="">COURSES</a></li>
                    <li><a href="">ABOUT</a></li>
                </ul>
            </div>
            <div class="navIcons">
                <a href="filter.php"><i class='bx bx-search-alt' ></i></a>
                <a href=""><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>

        <section class="table">
            <div class="tableTitle">
				<h1>SEARCH RESULTS</h1>
			</div>

            <div class="table-wrap">
                <table>
                    <tr>
                        <th>Student No.</th>
                        <th>Student Surname</th>
                        <th>Course Name</th>
                        <th>Instructor</th>
                        <th>Room</th>
                        <th>Building</th>
                        <th>Semester Taken</th>
                        <th>Academic Year</th>
                    </tr>

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
                            // count results
                            $count = mysqli_num_rows($search_result);
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
                                    <td colspan='8'> No Results Found </td>
                                </tr>
                            </table>";
                        }
                    ?>
                </table>
            </div>

            <div class="results">
                <?php
				    if(isset($_GET['search'])) {
						if ($search_result -> num_rows > 0) {
							echo "<h3>Results Found: $count</h3>";
						}
					}
					$conn-> close();
				?>
            </div>
		</section>
    </body>
</html>