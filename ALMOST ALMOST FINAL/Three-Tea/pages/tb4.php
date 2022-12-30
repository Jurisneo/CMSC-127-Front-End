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
                    <li><a href="tb4.php" class="active">ROOM</a></li>
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
                    <p>ROOM TABLE</p>
                </div> 
                <div class="mini-title2">
                    
                    <div class="search-bar">
                        <form action="search-tb4.php" method="POST">
                            <input id="search" type="text" name="tb4-search" placeholder="Filter Search">
                            <button type="submit" name="searchtb4">FILTER</button>
                        </form>
                    </div>

                    <div class="add-btn">
                        <a href="addtb4.php"><button class="addbtn" type="submit" name="addbtn1"><i class='bx bx-plus'></i> Add New Record</button></a>
                    </div>
		        </div>
	        </div>

            <div class="table-wrap">
                <table>
                    <tr>
                        <th>Room ID</th>
                        <th>Room Name</th>
                        <th>Building</th>
                        <th> </th>
                        <th> </th>
                    </tr>

                    <?php
                        include "connection.php";

                        $sql = "SELECT Rm_ID, Rm_Name, Rm_Bldg FROM ROOM";
                        $result = $conn -> query($sql);

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                echo 
                                "<tr>
                                    <td>" . $row["Rm_ID"] . "</td>
                                    <td>" . $row["Rm_Name"] . "</td>
                                    <td>" . $row["Rm_Bldg"] . "</td>
                                    <td><a href='delete.php?Rm_ID=". $row["Rm_ID"] ."'><i class='bx bxs-trash'></i></a></td>
                                    <td><a href='editTb4.php?Rm_ID=". $row["Rm_ID"] ."'><i class='bx bxs-edit' ></i></a></td>
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
                        $conn -> close();
                    ?>
                </table>
            </div>
        </section>
    </body>
</html>