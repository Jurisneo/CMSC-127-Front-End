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
                    <li><a href="Landing-Stud.php" class="active">HOME</a></li>
                    <li><a href="studprofile.php">PROFILE</a></li>
                    <li><a href="studchecklist.php">CHECKLIST</a></li>
                    <li><a href="addToCheck.php">ENROLL</a></li>
                    <li><a href="studcrs.php">COURSES</a></li>
                </ul>
            </div>
            <div class="navIcons">
                <a href="../index.php"><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>
       
        <section class="landing-box2">

            <div class="landing-content2">
                <div class="landing-card2">
                    <div class="card-content2">
                        <div class="card-img2">
                            <img src="imgs/7.jpg" alt="">
                        </div>

                        <div class="card-icon2">
                            <i class='bx bxs-user' ></i>
                        </div>

                        <div class="card-title2">
                            <span class="UPB">University of the Philippines Baguio</span>
                            <span class="crs">Bachelor of Science in Computer Science</span>
                            <p>Click the button below to view or edit your profile.</p>
                        </div>

                        <div class="card-btn2">
                            <button class="VPBtn" onclick="location.href='studprofile.php'">VIEW PROFILE</button>
                    </div>
                </div>
            </div>

            <div class="landing-content2">
                <div class="landing-card2">
                    <div class="card-content2">
                        <div class="card-img2">
                            <img src="imgs/8.jpg" alt="">
                        </div>

                        <div class="card-icon2">
                            <i class='bx bxs-book-open'></i>
                        </div>

                        <div class="card-title2">
                            <span class="UPB">University of the Philippines Baguio</span>
                            <span class="crs">Bachelor of Science in Computer Science</span>
                            <p>Click the button below to see the record of courses you have taken.</p>
                        </div>

                        <div class="card-btn2">
                            <button class="CTBtn" onclick="location.href='studchecklist.php'">COURSES TAKEN</button>
                    </div>
                </div>
            </div>

            <div class="landing-content2">
                <div class="landing-card2">
                    <div class="card-content2">
                        <div class="card-img2">
                            <img src="imgs/10.png" alt="">
                        </div>

                        <div class="card-icon2">
                        <i class='bx bxs-bookmark-alt-plus'></i>
                        </div>

                        <div class="card-title2">
                            <span class="UPB">University of the Philippines Baguio</span>
                            <span class="crs">Bachelor of Science in Computer Science</span>
                            <p>Click the button below to enroll a course.</p>
                        </div>

                        <div class="card-btn2">
                            <button class="VCBtn" onclick="location.href='addToCheck.php'">ENROLL</button>
                    </div>
                </div>
            </div>

            <div class="landing-content2">
                <div class="landing-card2">
                    <div class="card-content2">
                        <div class="card-img2">
                            <img src="imgs/9.jpg" alt="">
                        </div>

                        <div class="card-icon2">
                            <i class='bx bxs-graduation' ></i>
                        </div>

                        <div class="card-title2">
                            <span class="UPB">University of the Philippines Baguio</span>
                            <span class="crs">Bachelor of Science in Computer Science</span>
                            <p>Click the button below to see the list of courses.</p>
                        </div>

                        <div class="card-btn2">
                            <button class="VCBtn" onclick="location.href='studcrs.php'">VIEW COURSES</button>
                    </div>
                </div>
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
    </body>
</html>