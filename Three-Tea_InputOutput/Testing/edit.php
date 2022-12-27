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
        <section class="table">
            <div class="tableTitle">
				<h1>SEARCH RESULTS</h1>
			</div>

            <div class="table-wrap">
                <table>
                    <tr>
                        <th>Student No.</th>
                        <th>Student Surname</th>
                        <th>Course Name</th>
                        <th>Instructor</th>
                        <th>Room</th>
                        <th>Building</th>
                        <th>Semester Taken</th>
                        <th>Academic Year</th>
                    </tr>

            </div>
        </section>
    </body>
    
                    <?php

                    // Connect to the database
                    $conn = mysqli_connect('localhost', 'username', 'password', 'CMSC127_RSC_db');

                    // Check if the ID was passed in the query string
                    if (isset($_GET['id'])) {
                    // Retrieve the ID from the query string
                    $id = $_GET['id'];

                    // Retrieve the data for the row with the specified ID
                    $query = "SELECT * FROM CHECKLIST WHERE id=$id";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($result);

                    // Output the data in a form that can be edited
                    echo "<form action='update.php' method='post'>";
                    echo "<input type='hidden' name='id' value='$id'>";
                    echo "Name: <input type='text' name='name' value='" . $row['name'] . "'><br>";
                    echo "<input type='submit' value='Update'>";
                    echo "</form>";
                    }

                    ?>
                      <section class="table">
            <div class="tableTitle">
				<h1>SEARCH RESULTS</h1>
			</div>

            <div class="table-wrap">
                <table>
                    <tr>
                        <th>Student No.</th>
                        <th>Student Surname</th>
                        <th>Course Name</th>
                        <th>Instructor</th>
                        <th>Room</th>
                        <th>Building</th>
                        <th>Semester Taken</th>
                        <th>Academic Year</th>
                    </tr>
</html>