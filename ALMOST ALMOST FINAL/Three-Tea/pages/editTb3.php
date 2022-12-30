<?php
    include "connection.php";
    session_start();

    $Ins_ID = $_GET['Ins_ID'];

    $query = "SELECT * FROM INSTRUCTOR WHERE Ins_ID = '$Ins_ID'";
    $result = mysqli_query($conn, $query);
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

        <section class="container-add">
            <div class="formBox-add">
                <div class="boxTitle-add">
                    <h1>Update Instructor:</h1>
                </div>

                <form action="updateTb3.php" method="POST">
                <!-- first row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="insID">Instructor ID:</label>
                            <input type="number" name="insID" pattern="[1][0][2][0-9]{1}" value="<?php echo $row['Ins_ID'];?>" required>
                        </div>
                    </div>
                <!-- second row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="insLN">Last Name:</label>
                            <input type="text" name="insLN" value="<?php echo $row['Ins_LastName'];?>" required>
                        </div>
                    </div>
                <!-- third row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="insFN">First Name:</label>
                            <input type="text" name="insFN" value="<?php echo $row['Ins_FirstName'];?>" required>
                        </div>
                    </div>
                <!-- fourth row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="insMI">Middle Initial:</label>
                            <input type="text" name="insMI" value="<?php echo $row['Ins_MiddleIn'];?>" required>
                        </div>
                    </div>
                <!-- fifth row of form --> 
                    <div class="input">
                        <div class="inputDetails">
                            <label for="insSex">Sex:</label>
                            <select name="insSex" value="<?php echo $row['Ins_Sex'];?>" required>
                                <option value="" disabled>--Sex--</option>
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                            </select>
                        </div>
                    </div>
                <!-- sixth row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="insEmail">Email Address:</label>
                            <input type="email" name="insEmail" value="<?php echo $row['Ins_Email'];?>" required>
                        </div>
                    </div>
                    
                    <div class="edittb-btn">
                        <button type="submit" name="edittb3-btn">SAVE</button>
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