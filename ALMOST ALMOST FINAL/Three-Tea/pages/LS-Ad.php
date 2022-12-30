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
                    <li><p>RS Student Checklist Database</p></li>
                </ul>
            </div>
            <div class="navIcons">
                <a href="../index.php"><i class='bx bxs-home' ></i></a>
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
                
                <form id="login" class="formGrp1" action="admin-login.php" method="POST">
                    <input type="text" name="username1" class="LSinput" placeholder="USERNAME" required>
                    <input type="password" id="show" name="password1" class="LSinput" placeholder="PASSWORD" required>
                    <div class="check">
                        <input type="checkbox" id="showPW1" name="showPW1" class="showPW" onclick="showPW()">
                        <label for="showPW1">Show Password?</label>
                    </div>
                    <button type="submit" name="btnSubmit1" class="btnSubmit">LOG IN</button>
                </form>

                <form id="signup" class="formGrp2" action="admin-submission.php" method="POST">
                    <input type="number" name="admin" class="LSinput" pattern="[1][0][0-9]{4}" placeholder="ADMIN NUMBER (e.g. 10XXXX)"  required>
                    <input type="text" name="username1.2" class="LSinput" placeholder="USERNAME" required>
                    <input type="text" id="show_PW"name="password1.2" class="LSinput" placeholder="PASSWORD" minlength="5" required>
                    <button type="submit" name="btnSubmit1.2" class="btnSubmit">SIGN UP</button>
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