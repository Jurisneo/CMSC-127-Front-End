<!DOCTYPE html>
<html>
    <head>
        <title>STUDENT Table</title>
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
tr:nth-child() {background-color: #f2f2f2}
</style>
    </head>
    <nav class="navBar">
            <div class="navLogo">
                <a href="">B<span>S</span>C</a>
            </div>
            <div class="navLinks">
                <ul>
                <li><a href="filter.php">HOME</a></li>
                    <li><a href="table1.php">CHECKLIST</a></li>
                    <li><a href="table2.php">COURSE</a></li>
                    <li><a href="table3.php">INSTRUCTOR</a></li>
                    <li><a href="table4.php">STUDENT</a></li>
                    <li><a href="table5.php">ROOM</a></li>
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
        <th>Student ID</th>
        <th>Student Number</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Sex</th>
        <th>Year</th>
        <th>Email</th> 
        <th>Number</th>
        <th>Action</th>
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
$sql = "SELECT Stud_ID, Stud_Num, Stud_LastName, Stud_FirstName, Stud_MidName, Stud_Sex, Stud_Year, Stud_Email, Stud_PhoneNum  FROM STUDENT";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["Stud_ID"]. "</td>
    <td>" . $row["Stud_Num"] ."</td>
    <td>" .$row["Stud_LastName"]."</td>
    <td>". $row["Stud_FirstName"]."</td>
    <td>". $row["Stud_MidName"]."</td>
    <td>". $row["Stud_Sex"]."</td>
    <td>". $row["Stud_Year"]."</td>
    <td>". $row["Stud_Email"]."</td>
    <td>". $row["Stud_PhoneNum"]. "</td>
    <td><a href='delete1.php'? id=". 
                $row["CList_ID"] .">DELETE</a></td>
    </tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
