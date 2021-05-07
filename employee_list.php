<?php
	include "connection.php";
	
	$employee_query = 'SELECT * FROM employee_details';		
	$employee_results = mysqli_query($connect, $employee_query);
?>

<html>
	<head>
		<title>Assignment 2.1 - Employees List</title>
	</head>
	<body>
			<h3>Employees List</h3><a href="index.php">Add Employee Record</a><br/><br/>
			<table border="1px solid black" cellspacing="0" cellpadding="5">
				<thead>
					<tr>
						<th>Employee Id</th>
						<th>Employee Name</th>
						<th>Employee Email</th>
						<th>Employee Mobile</th>
						<th>Employee City</th>
						<th>Employee Gender</th>
						<th>Employee Department</th>
					</tr>
				</thead>
				<tbody>
				<?php
					while ($row_data = mysqli_fetch_array($employee_results))
					{
				?>
					<tr>
						<td><?php echo $row_data['emp_code']; ?></td>
						<td><?php echo $row_data['emp_name']; ?></td>
						<td><?php echo $row_data['emp_email']; ?></td>
						<td><?php echo $row_data['emp_mobile']; ?></td>
						<td><?php echo $row_data['emp_city']; ?></td>
						<td><?php echo $row_data['emp_gender']; ?></td>
						<td><?php echo $row_data['emp_department']; ?></td>
					</tr>
				<?php 
					}
				?>
				</tbody>
			</table>
	</body>
</html>
