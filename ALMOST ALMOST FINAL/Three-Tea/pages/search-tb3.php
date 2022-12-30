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
                <a href="tb3.php"><i class='bx bx-arrow-back'></i></a>
                <a href="../index.php"><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>

        <section class="table">
            <div class="tableTitle">
				<h1>SEARCH RESULTS - Instructor Table</h1>
			</div>

            <div class="table-wrap">
                <table>
                    <tr>
                        <th>Instructor ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Initial</th>
                        <th>Sex</th>
                        <th>Email Address</th>
                    </tr>

                    <?php
                        if (isset($_POST['searchtb3'])) {
                            $tb3search = $_POST['tb3-search'];

                            $query = "SELECT Ins_ID, Ins_LastName, Ins_FirstName, Ins_MiddleIn, Ins_Sex, Ins_Email 
                                    FROM INSTRUCTOR 
                                    WHERE CONCAT(Ins_ID, Ins_LastName, Ins_FirstName, Ins_MiddleIn, Ins_Sex, Ins_Email) 
                                    LIKE '%".$tb3search."%'";
                            $search_result = filterTable($query);

                            // count results
                            $count = mysqli_num_rows($search_result);
                        } else {
                            $querycheck = "SELECT * FROM INSTRUCTOR";
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
                                    <td>".$row["Ins_ID"]."</td>
                                    <td>".$row["Ins_LastName"]."</td>
                                    <td>".$row["Ins_FirstName"]."</td>
                                    <td>".$row["Ins_MiddleIn"]."</td>
                                    <td>".$row["Ins_Sex"] . "</td>
                                    <td>".$row["Ins_Email"] . "</td>
                                </tr>";
                            }
                            echo "</table>";
                        } else {
                            echo 
                                "<tr>
                                    <td colspan='6'> No Results Found </td>
                                </tr>
                            </table>";
                        }
                    ?>
                </table>
            </div>
    
            <div class="results">
                <?php
                    if(isset($_POST['searchtb3'])) {
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
    




