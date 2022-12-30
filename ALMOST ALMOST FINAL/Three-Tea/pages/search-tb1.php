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
                    <li><a href="Landing-Ad.php">HOME</a></li>
                    <li><a href="tb1.php">CHECKLIST</a></li>
                    <li><a href="tb2.php">COURSE</a></li>
                    <li><a href="tb3.php">INSTRUCTOR</a></li>
                    <li><a href="tb4.php">ROOM</a></li>
                    <li><a href="tb5.php">STUDENT</a></li>
                </ul>
            </div>
            <div class="navIcons">
                <a href="tb1.php"><i class='bx bx-arrow-back'></i></a>
                <a href="../index.php"><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>

        <section class="table">
            <div class="tableTitle">
				<h1>SEARCH RESULTS - Checklist Table</h1>
			</div>

            <div class="table-wrap">
                <table>
                <tr>
                        <th>Checklist ID</th>
                        <th>Student Number</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Course Name</th>
                        <th>Semester Taker</th>
                        <th>Academic Year</th>
                    </tr>

                    <?php 
                        if (isset($_POST['searchtb1'])) {
                            $tb1search = $_POST['tb1-search'];

                            $query = "SELECT CHECKLIST.CList_ID, STUDENT.Stud_Num, STUDENT.Stud_LastName, STUDENT.Stud_FirstName, COURSE.Crs_Name, CHECKLIST.CList_SemTaken, CHECKLIST.CList_AcadYear 
                                    FROM CHECKLIST 
                                    INNER JOIN STUDENT ON CHECKLIST.Stud_ID = STUDENT.Stud_ID 
                                    INNER JOIN COURSE ON CHECKLIST.Crs_ID = COURSE.Crs_ID
                                    WHERE CONCAT(CHECKLIST.CList_ID, STUDENT.Stud_Num, STUDENT.Stud_LastName, STUDENT.Stud_FirstName, COURSE.Crs_Name, CHECKLIST.CList_SemTaken, CHECKLIST.CList_AcadYear) 
                                    LIKE '%$tb1search%'";
                            $search_result = filterTable($query);

                            // count results
                            $count = mysqli_num_rows($search_result);
                        } else {
                            $querycheck = "SELECT CHECKLIST.CList_ID, STUDENT.Stud_Num, STUDENT.Stud_LastName, STUDENT.Stud_FirstName, COURSE.Crs_Name, CHECKLIST.CList_SemTaken, CHECKLIST.CList_AcadYear 
                                    FROM CHECKLIST 
                                    INNER JOIN STUDENT ON CHECKLIST.Stud_ID = STUDENT.Stud_ID 
                                    INNER JOIN COURSE ON CHECKLIST.Crs_ID = COURSE.Crs_ID";
                            $search_result = filterTable($querycheck);
                        }

                        // function to connect and execute the query
                        function filterTable($query)
                        {
                            include "connection.php";
                            $filter_Result = mysqli_query($conn, $query);
                            return $filter_Result;
                        }

                        // display result
                        if ($search_result-> num_rows > 0) {
                            while ($row = $search_result-> fetch_assoc()) {
                                echo 
                                "<tr>
                                    <td>".$row["CList_ID"]."</td>
                                    <td>".$row["Stud_Num"]."</td>
                                    <td>".$row["Stud_LastName"]."</td>
                                    <td>".$row["Stud_FirstName"]."</td>
                                    <td>".$row["Crs_Name"]."</td>
                                    <td>".$row["CList_SemTaken"]."</td>
                                    <td>".$row["CList_AcadYear"]."</td>
                                </tr>";
                            }
                            echo "</table>";
                        } else {
                            echo 
                                "<tr>
                                    <td colspan='7'> No Results Found </td>
                                </tr>
                            </table>";
                        }
                    ?>
                </table>
            </div>
    
            <div class="results">
                    <?php
                        if(isset($_POST['searchtb1'])) {
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
    