<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
        <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>BSC</title>
        <link rel="icon" href="imgs/BSC.png" type="image/ico" >
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
    </head>
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
    <body>
    <table>
    <tr>
    <th>Course ID</th>
        <th>Course Category</th>
        <th>Course Name</th>
        <th>Description</th>
        <th>Component</th>
        <th>Course Semester</th>
        <th>Instructor ID</th>
        <th>Room ID</th> 
    </tr>
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


<?php
$conn = mysqli_connect("localhost", "root", "", "CMSC127_RSC_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Crs_ID, Crs_Categ, Crs_Name, Crs_Descript, Crs_Comp, Crs_Sem, Ins_ID, Rm_ID  FROM COURSE";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Crs_ID"]. "</td><td>" . $row["Crs_Categ"] ."</td><td>" .$row["Crs_Name"]."</td><td>". $row["Crs_Descript"]."</td><td>". $row["Crs_Comp"]."</td><td>". $row["Crs_Sem"]."</td><td>". $row["Ins_ID"]."</td><td>". $row["Rm_ID"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>