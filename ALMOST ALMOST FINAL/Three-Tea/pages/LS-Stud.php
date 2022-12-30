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
                <div class="boxTitle-stud">
                    <h1>STUDENT LOG IN</h1>
                </div>
                
                <form id="login" class="formGrp-stud" action="check-login.php" method="POST">
                    <input type="text" name="username2" class="LSinput" placeholder="USERNAME" required>
                    <input type="password" id="show" name="password2" class="LSinput" placeholder="PASSWORD" minlength="5" required>
                    <div class="check">
                        <input type="checkbox" name="showPW2" class="showPW" onclick="showPW()">
                        <label for="showPW2">Show Password?</label>
                    </div>
                    <button type="submit" name="btnSubmit2" class="btnSubmit">LOG IN</button>
                    <div class="signUp">
                        <p>Don't have an account? <a href="signup.php">SIGN UP</a></p>
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