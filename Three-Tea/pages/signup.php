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
                    <li><a href="" class="active">HOME</a></li>
                    <li><a href="">COURSES</a></li>
                    <li><a href="">ABOUT</a></li>
                </ul>
            </div>
            <div class="navIcons">
                <a href="filter.php"><i class='bx bx-search-alt' ></i></a>
                <a href=""><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>
        
        <section class="container-sign">
            <div class="formBox-sign">
                <div class="boxTitle-sign">
                    <h1>Student Information</h1>
                </div>

                <form action="studsubmission.php" method="POST">
                 <!-- first row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="studLN">Last Name:</label>
                            <input type="text" name="studLN" required>
                        </div>
                    </div>
                <!-- second row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="studFN">First Name:</label>
                            <input type="text" name="studFN" required>
                        </div>
                    </div>
                <!-- third row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="studMN">Middle Name:</label>
                            <input type="text" name="studMN" required>
                        </div>
                    </div>
                <!-- fourth row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="studSN">Student Number:</label>
                            <input type="number" name="studSN" pattern="[2][0][0-9]{7}" placeholder="20XXXXXXX" required>
                        </div>
                    </div>
                <!-- fifth row of form --> 
                    <div class="input">
                        <div class="inputDetails">
                            <label for="studEA">Email Address:</label>
                            <input type="email" name="studEA" required>
                        </div>
                    </div>
                <!-- sixth row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="studPN">Phone Number:</label>
                            <input type="tel" name="studPN" pattern="[0][9][0-9]{9}" placeholder="09XXXXXXXXX" required>
                        </div>
                    </div>
                <!-- seventh row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="studSex">Sex:</label>
                            <select name="studSex" required>
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
                            <select name="studYear" required>
                                <option value="" disabled>--YEAR LEVEL--</option>
                                <option value="First">First</option>
                                <option value="Second">Second</option>
                                <option value="Third">Third</option>
                                <option value="Fourth">Fourth</option>
                            </select>
                        </div>
                    </div>

                    <div class="create-box">
                        <p>Create Account</h1>
                    <!-- ninth row of form -->
                        <div class="input">
                            <div class="inputDetails">
                                <label for="username">Username:</label>
                                <input type="text" name="studUN" required>
                            </div>
                        </div>
                    <!-- tenth row of form -->
                        <div class="input">
                            <div class="inputDetails">
                                <label for="studPW">Password:</label>
                                <input type="text" name="studPW" placeholder="minimum of 5 characters" minlength="5" required>
                            </div>
                        </div>
                    </div>

                    <div class="signup-btn">
                        <button type="submit" name="signup-btn">SIGN UP</button>
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