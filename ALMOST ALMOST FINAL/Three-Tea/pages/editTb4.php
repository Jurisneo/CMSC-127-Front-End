<?php
    include "connection.php";
    session_start();

    $Rm_ID = $_GET['Rm_ID'];

    $query = "SELECT * FROM ROOM WHERE Rm_ID = '$Rm_ID'";
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
                <a href="tb4.php"><i class='bx bx-arrow-back'></i></a>
                <a href="../index.php"><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>

        <section class="container-add">
            <div class="formBox-add1">
                <div class="boxTitle-add">
                    <h1>Update Room:</h1>
                </div>

                <form action="updateTb4.php" method="POST">
                <!-- first row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="rmID">Room ID:</label>
                            <input type="number" name="rmID" pattern="[1][1][0-9]{1}" value="<?php echo $row['Rm_ID'];?>" required>
                        </div>
                    </div>
                <!-- second row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="rmName">Room Name:</label>
                            <input type="text" name="rmName" value="<?php echo $row['Rm_Name'];?>"required>
                        </div>
                    </div>
                <!-- third row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="rmBldg">Building:</label>
                            <input type="text" name="rmBldg" value="<?php echo $row['Rm_Bldg'];?>"required>
                        </div>
                    </div>
                    
                    <div class="edittb-btn">
                        <button type="submit" name="edittb4-btn">SAVE</button>
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