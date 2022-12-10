<!DOCTYPE html>
<html>
<head>
	<title>STUDENT</title>
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
   

	<h1>STUDENT</h1>
	<table>
		<tr>
			<th>Student ID</th>
			<th>Student Number</th>
			<th>Student Lastname</th>
			<th>Student Firstname</th>
			<th>Student Middlename</th>
            <th>Student Sex</th>
            <th>Student Year</th>
            <th>Student Email</th>
            <th>Student Phonenumber</th>
		</tr>

		<?php
            if(isset($_POST['search']))
			{
    			$valueToSearch = $_POST['valueToSearch'];
    			// search in all table columns
    			// using concat mysql function
    			$queryCheck = "SELECT * FROM `STUDENT` WHERE CONCAT(`Stud_ID`, `Stud_Num`, `Stud_LastName`, `Stud_FirstName`, `Stud_MidName`. `Stud_Sex`, `Stud_Year`, `Stud_Email`, `Stud_PhoneNum`) LIKE '%".$valueToSearch."%'";
    			$search_result = filterTable($queryCheck);
    
			} else {
    			$queryCheckTable = "SELECT * FROM `STUDENT`";
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
                            <td>". $row["Stud_ID"] . "</td>
                            <td>". $row["Stud_Num"] ."</td>
                            <td>". $row["Stud_LastName"] ."</td>
                            <td>". $row["Stud_FirstName"] ."</td>
                            <td>". $row["Stud_MidName"] ."</td>
                            <td>". $row["Stud_Sex"] ."</td>
                            <td>". $row["Stud_Year"] ."</td>
                            <td>". $row["Stud_Email"] ."</td>
                            <td>". $row["Stud_PhoneNum"] ."</td>
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