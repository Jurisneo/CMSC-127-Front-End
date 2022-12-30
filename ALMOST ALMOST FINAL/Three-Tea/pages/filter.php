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
                <a href="Landing-Ad.php"><i class='bx bx-arrow-back'></i></a>
                <a href="../index.php"><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>

        <section class="fContainer">
            <div class="fTitle">
                <h1>Filter Search</h1>
                <p>Enter any keywords and click search button to filter data.</p>
            </div>
            <div class="sForm">
                <div class="sFormLeft">
                    <form action="search1.php" method="post">
                        <div class="filter">
                            <input type="text" name="valueToSearch" placeholder="Filter Search">
                            <button type="submit" name="search1">FILTER</button>
                        </div>
                    </form>
                </div>
                <div class="sFormRight">
                    <p>ADVANCED SEARCH</p>
                    <form action="search.php" method="get">
                        <!-- first row of form -->
                        <div class="input">
                            <div class="inputDetails">
                            <label for="semester">Semester:</label>
                                <select name="semTaken" required>
                                    <option value="none" disabled>--Select Semester--</option>
                                    <option value="First">FIRST SEMESTER</option>
                                    <option value="Second">SECOND SEMESTER</option>
                                </select>
                            </div>
                        </div>
                        <!-- second row of form -->
                        <div class="input">
                            <div class="inputDetails">
                            <label for="acadYear">Academic Year: </label>
                                <select name="acadYear" required>
                                    <option value="none" disabled>--Select Academic Year--</option>
                                    <option value="2020-2021">A.Y. 2020-2021</option>
                                    <option value="2021-2022">A.Y. 2021-2022</option>
                                    <option value="2022-2023">A.Y. 2022-2023</option>
                                </select>
                            </div>
                        </div>
                        <div class="searchbtn">
                            <button type="submit" name="search">SEARCH</button>
                        </div>
                    </form>
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