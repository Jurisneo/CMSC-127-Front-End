<!DOCTYPE html>
<html>
<head>
	<title>CHECKLIST</title>
	<style type="text/css">
		table {
			width: 100%;
			font-family: Helvetica;
			color: #957dad;
			font-size: 18px;
			text-align: left;
		}
		th {
			background-color: #957dad;
			color: #fff;
			font-size: 16px;
			text-align: center;
		}
		h1 {
			color: #d291bc;
		}
		body {
			margin: 20px;
		}
	</style>
</head>
<body>
   

	<h1>CHECKLIST</h1>
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
				echo "no result";
			}
			$conn-> close();
		?>
	</table>
</body>
</html>