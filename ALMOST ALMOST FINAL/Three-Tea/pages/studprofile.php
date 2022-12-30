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
                    <li><a href="studprofile.php" class="active">PROFILE</a></li>
                    <li><a href="studchecklist.php">CHECKLIST</a></li>
                    <li><a href="addToCheck.php">ENROLL</a></li>
                    <li><a href="studcrs.php">COURSES</a></li>
                </ul>
            </div>
            <div class="navIcons">
                <a href="Landing-Stud.php"><i class='bx bx-arrow-back'></i></a>
                <a href="../index.php"><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>

        <section class="table">
            <div class="tableTitle">
                <div class="greetings">
                    <?php
                        include "connection.php";
                        $studemail = $_SESSION['Stud_Email'];
                        $nameSearch = "SELECT Stud_FirstName FROM STUDENT WHERE Stud_Email='$studemail'";
                        $nameQue = mysqli_query($conn,$nameSearch);
                        $name = mysqli_fetch_assoc($nameQue);
                        echo '<h3> Hello ';
                        echo $name['Stud_FirstName'];
                        echo '! This is your profile dashboard.</h3>';
                        echo '<br>';
                    ?>
                </div> 

            <div class="mini-title2">
                <div class="add-btn">
                        <button class="addbtn" type="submit" name="studProf"><i class='bx bxs-edit' ></i> Edit Profile</button></a>
                    </div>
		        </div>
	        </div>

            <div class="table-wrap">
                <table>
                    <tr>
                        <th>Student Number</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Sex</th>
                        <th>Year</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                    </tr>

                    <?php
                        include "connection.php";

                       // id based on session student email

                        $studemail = $_SESSION['Stud_Email'];

                        $sql = "SELECT * FROM STUDENT WHERE Stud_ID = '$studemail'";
                        $result = $conn -> query($sql);

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                echo 
                                "<tr>
                                    <td>" . $row["Stud_Num"] . "</td>
                                    <td>" . $row["Stud_LastName"] . "</td>
                                    <td>" . $row["Stud_FirstName"] . "</td>
                                    <td>" . $row["Stud_MidName"] . "</td>
                                    <td>" . $row["Stud_Sex"] . "</td>
                                    <td>" . $row["Stud_Year"] . "</td>
                                    <td>" . $row["Stud_Email"] . "</td>
                                    <td>" . $row["Stud_PhoneNum"] . "</td>
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