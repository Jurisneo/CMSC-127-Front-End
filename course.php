<!DOCTYPE html>
<html>
<head>
	<title>COURSE</title>
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
			<th>Course ID</th>
			<th>Category</th>
			<th>Course Name</th>
			<th>Description</th>
			<th>Component</th>
            <th>Pre-requisite</th>
            <th>Unit/s</th>
            <th>Semester Available</th>
            <th>Instructor ID</th>
            <th>Room ID</th>
		</tr>

		<?php
            if(isset($_POST['search']))
			{
    			$valueToSearch = $_POST['valueToSearch'];
    			// search in all table columns
    			// using concat mysql function
    			$queryCheck = "SELECT * FROM `COURSE` WHERE CONCAT(`Crs_ID`, `Crs_Categ`, `Crs_Name`, `Crs_Descript`, `Crs_Comp`, `Crs_PreReq`, `Crs_Units`, `Crs_Sem`, `Ins_ID`, `Rm_ID`) LIKE '%".$valueToSearch."%'";
    			$search_result = filterTable($queryCheck);
    
			} else {
    			$queryCheckTable = "SELECT * FROM `COURSE`";
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
                            <td>". $row["Crs_ID"] . "</td>
                            <td>". $row["Crs_Categ"] ."</td>
                            <td>". $row["Crs_Name"] ."</td>
                            <td>". $row["Crs_Descript"] ."</td>
                            <td>". $row["Crs_Comp"] ."</td>
                            <td>". $row["Crs_PreReq"] ."</td>
                            <td>". $row["Crs_Units"] ."</td>
                            <td>". $row["Crs_Sem"] ."</td>
                            <td>". $row["Ins_ID"] ."</td>
                            <td>". $row["Rm_ID"] ."</td>
                            
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