<!DOCTYPE html>
<html>
<head>
	<link href="table.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>CHECKLIST</title>
	<link rel="icon" href="imgs/BSC.png" type="image/ico" >
</head>
	<body>
		<nav class="navBar">
            <div class="navLogo">
                <a href="">B<span>S</span>C</a>
            </div>
            <div class="navLinks">
                <ul>
                    <li><a href="filter.php" class="active">HOME</a></li>
                    <li><a href="filter.php">COURSES</a></li>
                    <li><a href="filter.php">ABOUT</a></li>
                </ul>
            </div>
            <div class="navIcons">
                <a href=""><i class='bx bx-search-alt' ></i></a>
                <a href=""><i class='bx bx-log-out-circle' ></i></a>
            </div>
        </nav>

		<section class="table">
			<div class="tableTitle">
				<a href="filter.php"><h1 class="neon">SEARCH RESULTS</h1></a>
			</div>
			<div class="table-wrap">
				<table>
					<tr>
						<th>Checklist ID</th>
						<th>Student ID</th>
						<th>Course ID</th>
						<th>Semester Taken</th>
						<th>Academic Year</th>
					</tr>

					<?php
						if(isset($_POST['search']))
						{
							$valueToSearch = $_POST['valueToSearch'];
							// search in all table columns
							// using concat mysql function
							$queryCheck = "SELECT * FROM `CHECKLIST` WHERE CONCAT(`CList_ID`, `Stud_ID`, `Crs_ID`, `CList_SemTaken`, `CList_AcadYear`) LIKE '%".$valueToSearch."%'";
							$search_result = filterTable($queryCheck);
							// count results
							$count = mysqli_num_rows($search_result);
				
						} else {
							$queryCheckTable = "SELECT * FROM `CHECKLIST`";
							$search_result = filterTable($queryCheckTable);
						}

						// function to connect and execute the query
						function filterTable($queryCheck)
						{
							include "connection.php";
							$filter_Result = mysqli_query($conn, $queryCheck);
							return $filter_Result;
						}

						if ($search_result-> num_rows> 0) {
							while ($row = $search_result -> fetch_assoc()) {
								echo 
									"<tr>
										<td>". $row["CList_ID"] . "</td>
										<td>". $row["Stud_ID"] ."</td>
										<td>". $row["Crs_ID"] ."</td>
										<td>". $row["CList_SemTaken"] ."</td>
										<td>". $row["CList_AcadYear"] ."</td>
									</tr>";
							}
							echo "</table>";
						} else {
							echo 
								"<tr>
									<td colspan='5'> No Results Found </td>
								</tr>
							</table>";
						}
					?>
				</table>
			</div>

			<div class="results">
				<?php
					if(isset($_POST['search']))
					{
						if ($search_result -> num_rows > 0) {
							echo "<h3>Results Found: $count</h3>";
						}
					}
					$conn-> close();
				?>
		</section>
	</body>
</html>
