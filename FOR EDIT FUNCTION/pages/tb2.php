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

        <section class="table">
            <div class="tableTitle">
		        <div class="mini-title">
                    <p>COURSE TABLE</p>
                </div> 
                <div class="mini-title2">
                    
                    <div class="search-bar">
                        <form action="tb2.php" method="POST">
                            <input id="search" type="text" name="tb1-search" placeholder="Filter Search">
                            <button type="submit" name="searchtb1">FILTER</button>
                        </form>
                    </div>

                    <div class="add-btn">
                        <a href="addtb2.php"><button class="addbtn" type="submit" name="addbtn1"><i class='bx bx-plus'></i> Add New Record</button></a>
                    </div>
		        </div>
	        </div>

            <div class="table-wrap">
                <table>
                    <tr>
                        <th>Course ID</th>
                        <th>Category</th>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Component</th>
                        <th>Pre-Requisite</th>
                        <th>Units</th>
                        <th>Semester</th>
                        <th>Instructor</th>
                        <th>Room</th>
                        <th> </th>
                        <th> </th>
                    </tr>

                    <?php
                        include "connection.php";

                        $sql = "SELECT COURSE.Crs_ID, COURSE.Crs_Categ, COURSE.Crs_Name, COURSE.Crs_Descript, COURSE.Crs_Comp, COURSE.Crs_PreReq, COURSE.Crs_Units, COURSE.Crs_Sem, INSTRUCTOR.Ins_LastName, ROOM.Rm_Name 
                        FROM COURSE 
                        INNER JOIN INSTRUCTOR ON COURSE.Ins_ID = INSTRUCTOR.Ins_ID 
                        INNER JOIN ROOM ON COURSE.Rm_ID = ROOM.Rm_ID";
                        $result = $conn -> query($sql);

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                echo 
                                "<tr>
                                    <td>" . $row["Crs_ID"] . "</td>
                                    <td>" . $row["Crs_Categ"] . "</td>
                                    <td>" . $row["Crs_Name"] . "</td>
                                    <td>" . $row["Crs_Descript"] . "</td>
                                    <td>" . $row["Crs_Comp"] . "</td>
                                    <td>" . $row["Crs_PreReq"] . "</td>
                                    <td>" . $row["Crs_Units"] . "</td>
                                    <td>" . $row["Crs_Sem"] . "</td>
                                    <td>" . $row["Ins_LastName"] . "</td>
                                    <td>" . $row["Rm_Name"] . "</td>
                                    <td><a href='delete.php?Crs_ID=". $row["Crs_ID"] ."'><i class='bx bxs-trash'></i></a></td>
                                    <td><a href='editTb2.php?Crs_ID=". $row["Crs_ID"] ."'><i class='bx bxs-edit' ></i></a></td>
                                </tr>";
                            }
                            echo "</table>";
                        } else {
                            echo 
                                "<tr>
                                    <td colspan='12'> No Results Found </td>
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