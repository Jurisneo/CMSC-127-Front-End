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
        
        <section class="container">
            <div class="formBox">
                <div class="btnBox">
                    <div id="btn"></div>
                    <button type="button" class="toggle" onclick="login()">LOG IN</button>
                    <button type="button" class="toggle" onclick="signup()">SIGN UP</button>
                </div>

                <div class="boxTitle">
                    <h1>ADMIN</h1>
                </div>
                
                <form id="login" class="formGrp1" action="" method="">
                    <input type="text" name="username1" class="LSinput" placeholder="USERNAME" required>
                    <input type="password" id="show" name="password1" class="LSinput" placeholder="PASSWORD" required>
                    <div class="check">
                        <input type="checkbox" id="showPW1" name="showPW1" class="showPW" onclick="showPW()">
                        <label for="showPW1">Show Password?</label>
                    </div>
                    <button type="submit" name="btnSubmit1" class="btnSubmit">LOG IN</button>
                </form>

                <form id="signup"class="formGrp2" action="" method="">
                    <input type="text" name="dept1"class="LSinput" placeholder="DEPARTMENT" required>
                    <input type="text" name="username1.2" class="LSinput" placeholder="USERNAME" required>
                    <input type="password" name="password1.2" class="LSinput" placeholder="PASSWORD" required>
                    <button type="submit" name="btnSubmit1.2" class="btnSubmit" onclick="goto_login1()">SIGN UP</button>
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

        <script src="script.js" type="text/javascript"></script>
    </body>
</html>
