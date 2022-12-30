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
                    <li><a href="">PROFILE</a></li>
                    <li><a href="studchecklist.php">CHECKLIST</a></li>
                    <li><a href="addToCheck.php">ENROLL</a></li>
                    <li><a href="stdcrs.php" class="active">COURSES</a></li>
                </ul>
            </div>
            <div class="navIcons">
                <a href="Landing-Stud.php"><i class='bx bx-arrow-back'></i></a>
                <a href="../index.php"><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>

        <section class="table">
            <div class="tableTitle">
				<h1>SEARCH RESULTS</h1>
			</div>

            <div class="table-wrap">
                <table>
                    <tr>
                        <th>Category</th>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Component</th>
                        <th>Pre-Requisite</th>
                        <th>Units</th>
                        <th>Semester</th>
                    </tr>

                    <?php 
                        if (isset($_POST['searchCrs'])) {
                            $searchcrs = $_POST['crs-search'];
                            // search in all table columns
                            // using concat mysql function
                            $query = "SELECT COURSE.Crs_Categ, COURSE.Crs_Name, COURSE.Crs_Descript, COURSE.Crs_Comp, COURSE.Crs_PreReq, COURSE.Crs_Units, COURSE.Crs_Sem
                                    FROM COURSE
                                    WHERE CONCAT(COURSE.Crs_Categ, COURSE.Crs_Name, COURSE.Crs_Descript, COURSE.Crs_Comp, COURSE.Crs_PreReq, COURSE.Crs_Units, COURSE.Crs_Sem)
                                    LIKE '%".$searchcrs."%'";
                            $search_result = filterTable($query);

                            // count result
                            $count = mysqli_num_rows($search_result);
                        } else {
                            $querycheck= "SELECT COURSE.Crs_Categ, COURSE.Crs_Name, COURSE.Crs_Descript, COURSE.Crs_Comp, COURSE.Crs_PreReq, COURSE.Crs_Units, COURSE.Crs_Sem
                                    FROM COURSE ORDER BY COURSE.Crs_ID";
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
                                    <td>".$row["Crs_Categ"]."</td>
                                    <td>".$row["Crs_Name"]."</td>
                                    <td>".$row["Crs_Descript"]."</td>
                                    <td>".$row["Crs_Comp"]."</td>
                                    <td>".$row["Crs_PreReq"]."</td>
                                    <td>".$row["Crs_Units"]."</td>
                                    <td>".$row["Crs_Sem"]."</td>
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
                    if(isset($_POST['searchCrs'])) {
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
