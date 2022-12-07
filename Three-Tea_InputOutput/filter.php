<!DOCTYPE html>
<html>
    <head>
        <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
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

        <section class="fTitle">
            <h1>DB Input Form and Output Tables</h1>
            <p>Enter keywords and click search button to filter data.</p>
        </section>

        <section class="fContainer">
            <div class="sForm">
                <form action="search.php" method="">
                <!-- first row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="Name">Name:</label>
                            <input type="text" name="Name" placeholder="Your Name" required>
                        </div>
                    </div>
                <!-- second row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="Name">Name:</label>
                            <input type="text" name="Name" placeholder="Your Name" required>
                        </div>
                    </div>
                    <div class="searchbtn">
                        <button type="submit" name="submit-search">SEARCH</button>
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
    </body>
</html>