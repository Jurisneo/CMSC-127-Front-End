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
			<th>Instructor ID</th>
            <th>Instructor Lastname</th>
            <th>Instructor Firstname</th>
            <th>Instructor MiddleIn</th>
            <th>Instructor Sex</th>
            <th>Instructor Email</th>

		</tr>

		<?php
            if(isset($_POST['search']))
			{
    			$valueToSearch = $_POST['valueToSearch'];
    			// search in all table columns
    			// using concat mysql function
    			$queryCheck = "SELECT * FROM `INSTRUCTOR` WHERE CONCAT(`Ins_ID`, `Ins_LastName`, `Ins_FirstName`, `Ins_MiddleIn`, `Ins_Sex`, `Ins_Email`) LIKE '%".$valueToSearch."%'";
    			$search_result = filterTable($queryCheck);
    
			} else {
    			$queryCheckTable = "SELECT * FROM `INSTRUCTOR`";
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
                            <td>". $row["Ins_ID"] . "</td>
                            <td>". $row["Ins_LastName"] ."</td>
                            <td>". $row["Ins_FirstName"] ."</td>
                            <td>". $row["Ins_MiddleIn"] ."</td>
                            <td>". $row["Ins_Sex"] ."</td>
                            <td>". $row["Ins_Email"] ."</td>
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