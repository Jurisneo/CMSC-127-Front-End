<!DOCTYPE html>
<html>
<head>
	<title>ROOM</title>
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
   

	<h1>ROOM</h1>
	<table>
		<tr>
			<th>Room ID</th>
            <th>Room Name</th>
            <th>Room Bldg</th>
		</tr>

		<?php
            if(isset($_POST['search']))
			{
    			$valueToSearch = $_POST['valueToSearch'];
    			// search in all table columns
    			// using concat mysql function
    			$queryCheck = "SELECT * FROM `ROOM` WHERE CONCAT(`Rm_ID`, `Rm_Name`, `Rm_Bldg`) LIKE '%".$valueToSearch."%'";
    			$search_result = filterTable($queryCheck);
    
			} else {
    			$queryCheckTable = "SELECT * FROM `ROOM`";
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
                            <td>". $row["Rm_ID"] . "</td>
                            <td>". $row["Rm_Name"] ."</td>
                            <td>". $row["Rm_Bldg"] ."</td>
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