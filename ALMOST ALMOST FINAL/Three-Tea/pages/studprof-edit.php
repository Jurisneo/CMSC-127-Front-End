<?php
    include "connection.php";
    session_start();

    $Stud_Email = $_SESSION['Stud_Email'];

    $sql = "SELECT * FROM STUDENT WHERE Stud_Email = '$Stud_Email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

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
                <a href="studprofile.php"><i class='bx bx-arrow-back'></i></a>
                <a href="../index.php"><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>
        
        <section class="container-add">
            <div class="formBox-add">
                <div class="boxTitle-add">
                    <h1>Edit Your Profile</h1>
                </div>

                <form action="studsubmission.php" method="POST">
                 <!-- first row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="studLN">Last Name:</label>
                            <input type="text" name="studLN" value="<?php echo $row['Stud_LastName'];?>"required>
                        </div>
                    </div>
                <!-- second row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="studFN">First Name:</label>
                            <input type="text" name="studFN" value="<?php echo $row['Stud_FirstName'];?>"required>
                        </div>
                    </div>
                <!-- third row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="studMN">Middle Name:</label>
                            <input type="text" name="studMN" value="<?php echo $row['Stud_MidName'];?>"required>
                        </div>
                    </div>
                <!-- fourth row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="studSN">Student Number:</label>
                            <input type="number" name="studSN" pattern="[2][0][0-9]{7}" placeholder="20XXXXXXX" value="<?php echo $row['Stud_Num'];?>" required>
                        </div>
                    </div>
                <!-- fifth row of form --> 
                    <div class="input">
                        <div class="inputDetails">
                            <label for="studEA">Email Address:</label>
                            <input type="email" name="studEA" value="<?php echo $row['Stud_Email'];?>"required>
                        </div>
                    </div>
                <!-- sixth row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="studPN">Phone Number:</label>
                            <input type="tel" name="studPN" pattern="[0][9][0-9]{9}" placeholder="09XXXXXXXXX" value="<?php echo $row['Stud_PhoneNum'];?>"required>
                        </div>
                    </div>
                <!-- seventh row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="studSex">Sex:</label>
                            <select name="studSex" value="<?php echo $row['Stud_Sex'];?>" required>
                                <option value="" disabled>--SEX--</option>
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                            </select>
                        </div>
                    </div>
                    <!-- eighth row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="studYear">Year Level:</label>
                            <select name="studYear" value="<?php echo $row['Stud_Year'];?>" required>
                                <option value="" disabled>--YEAR LEVEL--</option>
                                <option value="First">First</option>
                                <option value="Second">Second</option>
                                <option value="Third">Third</option>
                                <option value="Fourth">Fourth</option>
                            </select>
                        </div>
                    </div>

                    <div class="edittb-btn">
                        <button type="submit" name="editSP-btn">SAVE</button>
                    </div>
                </form>
            </div>
        </section>

        <footer class="footer">
            <div class="footer1">
                <div class="footerLogo">
                    <p>B<span>S</span>C</p>
                </div>
            </div>

            <div class="footer2">
                <div class="footerBot">
                    <div class="footerInf">
                        <p>BSC est. 2022 | All rights reserved</p>
                    </div>	
                    <div class="footerEnd">
                        <p>This website is designed and arranged by <span>BARREDO • CONCEPCION • SANTOS</span>.</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="../script.js" type="text/javascript"></script>
        
    </body>
</html>
