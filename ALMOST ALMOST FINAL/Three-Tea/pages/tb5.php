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
                    <li><a href="tb5.php" class="active">STUDENT</a></li>
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
                    <p>STUDENT TABLE</p>
                </div> 

                <div class="mini-title2">
                    <div class="search-bar">
                        <form action="search-tb5.php" method="POST">
                            <input id="search" type="text" name="tb5-search" placeholder="Filter Search">
                            <button type="submit" name="searchtb5">FILTER</button>
                        </form>
                    </div>
		        </div>
	        </div>

            <div class="table-wrap">
                <table>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Number</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Sex</th>
                        <th>Year</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th> </th>
                    </tr>

                    <?php
                        include "connection.php";

                        $sql = "SELECT Stud_ID, Stud_Num, Stud_LastName, Stud_FirstName, Stud_MidName, Stud_Sex, Stud_Year, Stud_Email, Stud_PhoneNum FROM STUDENT";
                        $result = $conn -> query($sql);

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                echo 
                                "<tr>
                                    <td>" . $row["Stud_ID"] . "</td>
                                    <td>" . $row["Stud_Num"] . "</td>
                                    <td>" . $row["Stud_LastName"] . "</td>
                                    <td>" . $row["Stud_FirstName"] . "</td>
                                    <td>" . $row["Stud_MidName"] . "</td>
                                    <td>" . $row["Stud_Sex"] . "</td>
                                    <td>" . $row["Stud_Year"] . "</td>
                                    <td>" . $row["Stud_Email"] . "</td>
                                    <td>" . $row["Stud_PhoneNum"] . "</td>
                                    <td><a href='delete.php?Stud_ID=". $row["Stud_ID"] ."'><i class='bx bxs-trash'></i></a></td>
                                </tr>";
                            }
                            echo "</table>";
                        } else {
                            echo 
                                "<tr>
                                    <td colspan='10'> No Results Found </td>
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