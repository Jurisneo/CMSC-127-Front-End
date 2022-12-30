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
                    <li><a href="tb1.php" class="active">CHECKLIST</a></li>
                    <li><a href="tb2.php">COURSE</a></li>
                    <li><a href="tb3.php">INSTRUCTOR</a></li>
                    <li><a href="tb4.php">ROOM</a></li>
                    <li><a href="tb5.php">STUDENT</a></li>
                </ul>
            </div>
            <div class="navIcons">
                <a href="Landing-Ad.php"><i class='bx bx-arrow-back'></i></a>
                <a href="../index.php"><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>

        <section class="table">
            <div class="tableTitle">
		        <div class="mini-title">
                    <p>CHECKLIST TABLE</p>
                </div> 

                <div class="mini-title2">
                    <div class="search-bar">
                        <form action="search-tb1.php" method="POST">
                            <input id="search" type="text" name="tb1-search" placeholder="Filter Search">
                            <button type="submit" name="searchtb1">FILTER</button>
                        </form>
                    </div>
		        </div>
	        </div>

            <div class="table-wrap">
                <table>
                    <tr>
                        <th>Student Number</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Course Name</th>
                        <th>Semester Taker</th>
                        <th>Academic Year</th>
                        <th> </th>
                    </tr>

                    <?php
                        include "connection.php";

                        $sql = "SELECT STUDENT.Stud_Num, STUDENT.Stud_LastName, STUDENT.Stud_FirstName, COURSE.Crs_Name, CHECKLIST.CList_SemTaken, CHECKLIST.CList_AcadYear 
                        FROM CHECKLIST 
                        INNER JOIN STUDENT ON CHECKLIST.Stud_ID = STUDENT.Stud_ID 
                        INNER JOIN COURSE ON CHECKLIST.Crs_ID = COURSE.Crs_ID";
                        $result = $conn -> query($sql);

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                echo 
                                "<tr>
                                    <td>" . $row["Stud_Num"] . "</td>
                                    <td>" . $row["Stud_LastName"] . "</td>
                                    <td>" . $row["Stud_FirstName"] . "</td>
                                    <td>" . $row["Crs_Name"] . "</td>
                                    <td>" . $row["CList_SemTaken"] . "</td>
                                    <td>" . $row["CList_AcadYear"] . "</td>
                                    <td><a href='delete.php?CList_ID=". $row["CList_ID"] ."'><i class='bx bxs-trash'></i></a></td>
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
                        $conn -> close();
                    ?>
                </table>
            </div>
        </section>
    </body>
</html>