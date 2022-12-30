<?php
    include "connection.php";
    session_start();

    $Crs_ID = $_GET['Crs_ID'];

    $query = "SELECT * FROM COURSE WHERE Crs_ID = '$Crs_ID'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
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
                    <li><a href="Landing-Ad.php" >HOME</a></li>
                    <li><a href="tb1.php">CHECKLIST</a></li>
                    <li><a href="tb2.php">COURSE</a></li>
                    <li><a href="tb3.php">INSTRUCTOR</a></li>
                    <li><a href="tb4.php">ROOM</a></li>
                    <li><a href="tb5.php">STUDENT</a></li>
                </ul>
            </div>
            <div class="navIcons">
                <a href="filter.php"><i class='bx bx-search-alt' ></i></a>
                <a href=""><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>

        <section class="container-edit">
            <div class="formBox-edit">
                <div class="boxTitle-edit">
                    <h1>Update Course:</h1>
                </div>

                <form action="updateTb2.php" method="POST">
                <!-- first row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="crsID">Course ID:</label>
                            <input type="number" name="crsID" pattern="[1][1][2][0-9]{2}" value="<?php echo $row['Crs_ID'];?>">
                        </div>
                    </div>
                <!-- second row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="crsCateg">Category:</label>
                            <select name="crsCateg" value="<?php echo $row['Crs_Categ'];?>" >
                                <option value="" disabled>--Choose Category--</option>
                                <option value="MAJOR">MAJOR</option>
                                <option value="FOUNDATION COURSES">FOUNDATION COURSES</option>
                                <option value="QUALIFIED ELECTIVES">QUALIFIED ELECTIVES</option>
                            </select>
                        </div>
                    </div>
                <!-- third row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="crsName">Course Name:</label>
                            <input type="text" name="crsName" value="<?php echo $row['Crs_Name'];?>" >
                        </div>
                    </div>
                <!-- fourth row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label class="label" for="crsDesc">Course Description:</label>
                            <input type="text" name="crsDesc" value="<?php echo $row['Crs_Descript'];?>" >
                        </div>
                    </div>
                <!-- fifth row of form -->
                <div class="input">
                        <div class="inputDetails">
                            <label for="crsComp">Component:</label>
                            <select name="crsComp" value="<?php echo $row['Crs_Comp'];?>" >
                                <option value="" disabled>--Course Component--</option>
                                <option value="LEC">Lec Only</option>
                                <option value="LAB">Lab Only</option>
                                <option value="LEC & LAB">Lec and Lab</option>
                            </select>
                        </div>
                    </div>
                <!-- sixth row of form --> 
                    <div class="input">
                        <div class="inputDetails">
                            <label for="crsPR">Pre-Requisite:</label>
                            <input type="text" name="crsPR" value="<?php echo $row['Crs_PreReq'];?>" >
                        </div>
                    </div>
                <!-- seventh row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="crsUnits">Units</label>
                            <input type="number" name="crsUnits" max="5" value="<?php echo $row['Crs_Units'];?>" >
                        </div>
                    </div>
                <!-- eighth row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="crsSem">Semester:</label>
                            <select name="crsSem" value="<?php echo $row['Crs_Sem'];?>" >
                                <option value="" disabled>--Choose Semester--</option>
                                <option value="First">First Only</option>
                                <option value="Second">Second Only</option>
                                <option value="First & Second">First and Second</option>
                            </select>
                        </div>
                    </div>
                    <!-- ninth row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="crsIns">Instructor:</label>
                            <select name="crsIns" value="<?php echo $row['Ins_ID'];?>" >
                                <option value="" disabled>--Choose Instructor--</option>
                                <option value="1001">BALANGCOD, A.</option>
                                <option value="1002">JAVELLANA, L.</option>
                                <option value="1003">LIBATIQUE, C.</option>
                                <option value="1004">VIERNES, J.</option>
                                <option value="1005">BUENO, J.</option>
                                <option value="1006">PAJIMOLA, A.</option>
                                <option value="1007">COLLERA, J.</option>
                                <option value="1008">MARIGMEN, J.</option>
                                <option value="1009">PAJARILLO, R.</option>
                                <option value="1010">NOLASCO, M.</option>
                                <option value="1011">PASION, A.</option>
                                <option value="1012">DOMILES, S.</option>
                                <option value="1013">TRIOL, A.</option>
                            </select>
                        </div>
                    </div>

                    <!-- tenth row of form -->
                    <div class="input">
                        <div class="inputDetails">
                            <label for="crsRm">Room:</label>
                            <select name="crsRm" rvalue="<?php echo $row['Rm_ID'];?>">
                                <option value="" disabled>--Choose Instructor--</option>
                                <option value="101">KA 101</option>
                                <option value="102">KA 102</option>
                                <option value="103">KA 103</option>
                                <option value="104">KA 104</option>
                                <option value="105">KA 201</option>
                                <option value="106">KA 202</option>
                                <option value="107">KA 203</option>
                                <option value="108">KA 204</option>
                                <option value="109">KA 301</option>
                                <option value="110">KA 302</option>
                                <option value="111">KA 303</option>
                                <option value="112">KA 304</option>
                                <option value="113">COM LAB 1</option>
                                <option value="114">COM LAB 2</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="edittb-btn">
                        <button type="submit" name="edittb2-btn">SAVE</button>
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