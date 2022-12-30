<?php
    session_start();
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
                    <li><a href="studprofile.php">PROFILE</a></li>
                    <li><a href="studchecklist.php">CHECKLIST</a></li>
                    <li><a href="addToCheck.php" class="active">ENROLL</a></li>
                    <li><a href="studcrs.php">COURSES</a></li>
                </ul>
            </div>
            <div class="navIcons">
                <a href="Landing-Stud.php"><i class='bx bx-arrow-back'></i></a>
                <a href="../index.php"><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>
        
        <section class="container-ch">
            <div class="formBox-ch">
                <div class="boxTitle-ch">
                    <h1>Course to Take:</h1>
                </div>

                <form action="add-check.php" method="POST">
                <!-- second row of form -->
                <div class="input">
                        <div class="inputDetails">
                            <label for="check-crs">Course to take:</label>
                            <select name="check-crs" required>
                                <option value="" disabled>--Choose Course--</option>
                                <option value="11111">CMSC 11</option>
                                <option value="11112">CMSC 11</option>
                                <option value="11113">CMSC 12</option>
                                <option value="11114">CMSC 12</option>
                                <option value="11115">CMSC55</option>
                            </select>
                        </div>
                    </div>
                <!-- third row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="check-sem">Semester:</label>
                            <select name="check-sem" required>
                                <option value="" disabled>--Choose Semester--</option>
                                <option value="First">First</option>
                                <option value="Second">Second</option>
                            </select>
                        </div>
                    </div>
                <!-- fourth row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="check-AY">Semester:</label>
                            <select name="check-AY" required>
                                <option value="" disabled>--Choose Semester--</option>
                                <option value="2018-2019">A.Y. 2018-2019</option>
                                <option value="2019-2020">A.Y. 2019-2020</option>
                                <option value="2020-2021">A.Y. 2020-2021</option>
                                <option value="2021-2022">A.Y. 2021-2022</option>
                                <option value="2022-2023">A.Y. 2022-2023</option>
                            </select>
                        </div>
                    </div>

                    <div class="ch-btn">
                        <button type="submit" name="ch-btn">ADD TO LIST</button>
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