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
                    <li><a href="tb3.php" class="active">INSTRUCTOR</a></li>
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
                    <p>INSTRUCTOR TABLE</p>
                </div> 
                <div class="mini-title2">
                    
                    <div class="search-bar">
                        <form action="search-tb3.php" method="POST">
                            <input id="search" type="text" name="tb3-search" placeholder="Filter Search">
                            <button type="submit" name="searchtb3">FILTER</button>
                        </form>
                    </div>

                    <div class="add-btn">
                        <a href="addtb3.php"><button class="addbtn" type="submit" name="addbtn1"><i class='bx bx-plus'></i> Add New Record</button></a>
                    </div>
		        </div>
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
                        <th> </th>
                        <th> </th>
                    </tr>

                    <?php
                        include "connection.php";

                        $sql = "SELECT Ins_ID, Ins_LastName, Ins_FirstName, Ins_MiddleIn, Ins_Sex, Ins_Email FROM INSTRUCTOR";
                        $result = $conn -> query($sql);

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                echo 
                                "<tr>
                                    <td>" . $row["Ins_ID"] . "</td>
                                    <td>" . $row["Ins_LastName"] . "</td>
                                    <td>" . $row["Ins_FirstName"] . "</td>
                                    <td>" . $row["Ins_MiddleIn"] . "</td>
                                    <td>" . $row["Ins_Sex"] . "</td>
                                    <td>" . $row["Ins_Email"] . "</td>
                                    <td><a href='delete.php?Ins_ID=". $row["Ins_ID"] ."'><i class='bx bxs-trash'></i></a></td>
                                    <td><a href='editTb3.php?Ins_ID=". $row["Ins_ID"] ."'><i class='bx bxs-edit' ></i></a></td>
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
                        $conn -> close();
                    ?>
                </table>
            </div>
        </section>
    </body>
</html>