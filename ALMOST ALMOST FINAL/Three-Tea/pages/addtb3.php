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
                    <h1>Add Instructor:</h1>
                </div>

                <form action="sub-addtb3.php" method="POST">
                <!-- first row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="insID">Instructor ID:</label>
                            <input type="number" name="insID" pattern="[1][0][2][0-9]{1}" required>
                        </div>
                    </div>
                <!-- second row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="insLN">Last Name:</label>
                            <input type="text" name="insLN" required>
                        </div>
                    </div>
                <!-- third row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="insFN">First Name:</label>
                            <input type="text" name="insFN" required>
                        </div>
                    </div>
                <!-- fourth row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="insMI">Middle Initial:</label>
                            <input type="text" name="insMI" required>
                        </div>
                    </div>
                <!-- fifth row of form --> 
                    <div class="input">
                        <div class="inputDetails">
                            <label for="insSex">Sex:</label>
                            <select name="insSex" required>
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
                            <input type="email" name="insEmail" required>
                        </div>
                    </div>
                    
                    <div class="addtb-btn">
                        <button type="submit" name="addtb-btn">ADD INSTRUCTOR</button>
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