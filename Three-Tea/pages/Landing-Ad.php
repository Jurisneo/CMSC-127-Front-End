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
       
        <section class="landing-box">

            <div class="landing-content">
                <div class="landing-card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="imgs/1.jpg" alt="">
                        </div>

                        <div class="card-icon">
                            <i class='bx bxs-book-reader'></i>
                        </div>

                        <div class="card-title">
                            <span class="UPB">University of the Philippines Baguio</span>
                            <span class="crs">Bachelor of Science in Computer Science</span>
                            <p>Click the button below to see student table.</p>
                        </div>

                        <div class="card-btn">
                            <button class="studBtn">STUDENTS</button>
                    </div>
                </div>
            </div>

            <div class="landing-content">
                <div class="landing-card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="imgs/2.jpg" alt="">
                        </div>

                        <div class="card-icon">
                            <i class='bx bxs-book-content'></i>
                        </div>

                        <div class="card-title">
                            <span class="UPB">University of the Philippines Baguio</span>
                            <span class="crs">Bachelor of Science in Computer Science</span>
                            <p>Click the button below to see course table.</p>
                        </div>

                        <div class="card-btn">
                            <button class="crsBtn">COURSES</button>
                    </div>
                </div>
            </div>

            <div class="landing-content">
                <div class="landing-card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="imgs/3.jpg" alt="">
                        </div>

                        <div class="card-icon">
                            <i class='bx bxs-check-square' ></i>
                        </div>

                        <div class="card-title">
                            <span class="UPB">University of the Philippines Baguio</span>
                            <span class="crs">Bachelor of Science in Computer Science</span>
                            <p>Click the button below to see checklist table.</p>
                        </div>

                        <div class="card-btn">
                            <button class="chkBtn">CHECKLIST</button>
                    </div>
                </div>
            </div>

            <div class="landing-content">
                <div class="landing-card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="imgs/4.jpg" alt="">
                        </div>

                        <div class="card-icon">
                            <i class='bx bxs-been-here'></i>
                        </div>

                        <div class="card-title">
                            <span class="UPB">University of the Philippines Baguio</span>
                            <span class="crs">Bachelor of Science in Computer Science</span>
                            <p>Click the button below to see room table.</p>
                        </div>

                        <div class="card-btn">
                            <button class="rmBtn">ROOMS</button>
                    </div>
                </div>
            </div>

            <div class="landing-content">
                <div class="landing-card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="imgs/5.jpg" alt="">
                        </div>

                        <div class="card-icon">
                            <i class='bx bxs-group'></i>
                        </div>

                        <div class="card-title">
                            <span class="UPB">University of the Philippines Baguio</span>
                            <span class="crs">Bachelor of Science in Computer Science</span>
                            <p>Click the button below to see instructor table.</p>
                        </div>

                        <div class="card-btn">
                            <button class="insBtn">INSTRUCTORS</button>
                    </div>
                </div>
            </div>

            <div class="landing-content" onclick="filter()">
                <div class="landing-card1">
                    <div class="card-content1">
                        <div class="card-icon1">
                            <i class='bx bxs-search-alt-2'></i>
                        </div>
                        <div class="card-title1">
                            <span class="f-search">FILTER SEARCH</span>
                        </div>
                        <div class="card-img1">
                            <img src="imgs/6.jpg" alt="">
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

        <script src="../script.js" type="text/javascript"></script>
        
    </body>
</html>