<?php  
	include "connection.php";
	
	if(isset($_POST['SubmitButton'])){
		$emp_code = mysqli_real_escape_string($connect, $_POST["emp_code"]);
		$emp_name = mysqli_real_escape_string($connect, $_POST["emp_name"]);
		$emp_email = mysqli_real_escape_string($connect, $_POST["emp_email"]);
		$emp_mobile = mysqli_real_escape_string($connect, $_POST["emp_mobile"]);
		$emp_city = mysqli_real_escape_string($connect, $_POST["emp_city"]);
		$emp_gender = mysqli_real_escape_string($connect, $_POST["emp_gender"]);
		$emp_department = mysqli_real_escape_string($connect, $_POST["emp_department"]);
		
		$insert_sql = "INSERT INTO employee_details 
				(
					emp_code, 
					emp_name, 
					emp_email, 
					emp_mobile, 
					emp_city, 
					emp_gender, 
					emp_department
				) VALUES 
				(
					'$emp_code',
					'$emp_name',
					'$emp_email',
					'$emp_mobile',
					'$emp_city',
					'$emp_gender',
					'$emp_department'
				)";
		if (mysqli_query($connect, $insert_sql)) {
			  echo "<h3 style='color:blue'>Record inserted<h3>";
?>
			<br/>
			<label style="color:blue">Employee Id: <?php echo $emp_code; ?></label><br/>
			<label style="color:blue">Employee Name: <?php echo $emp_name; ?></label><br/>
			<label style="color:blue">Employee Email: <?php echo $emp_email; ?></label><br/>
			<label style="color:blue">Employee Mobile: <?php echo $emp_mobile; ?></label><br/>
			<label style="color:blue">Employee City: <?php echo $emp_city; ?></label><br/>
			<label style="color:blue">Employee Gender: <?php echo $emp_gender; ?></label><br/>
			<label style="color:blue">Employee Department: <?php echo $emp_department; ?></label><br/>
<?php
		} else {
			  echo "<h3 style='color:blue>Record inserted<h3>Unable to add record";
		}
		mysqli_close($connect);
	} 
?>

<html>
	<head>
		<title>Assignment 2.1 - Add Employee</title>
	</head>
	<body>
		<form action="" method="POST" name="addEmployeeForm">
			<h3>Add Employee Form</h3><a href="employee_list.php">View Employee Records</a><br/><br/>
			<table cellspacing="5" cellpadding="5">
				<tr>
					<td><label style="font-weight:bold">Employee Id:</label></td>
					<td><input type="text" id="emp_code" name="emp_code" value=""/></td>
				</tr>
				<tr>
					<td><label style="font-weight:bold">Employee Name:</label></td>
					<td><input type="text" id="emp_name" name="emp_name" value=""/></td>
				</tr>
				<tr>
					<td><label style="font-weight:bold">Employee Email:</label></td>
					<td><input type="text" id="emp_email" name="emp_email" value=""/></td>
				</tr>
				<tr>
					<td><label style="font-weight:bold">Employee Mobile:</label></td>
					<td><input type="text" id="emp_mobile" name="emp_mobile" value=""/></td>
				</tr>
				<tr>
					<td><label style="font-weight:bold">Employee City:</label></td>
					<td><input type="text" id="emp_city" name="emp_city" value=""/></td>
				</tr>
				<tr>
					<td><label style="font-weight:bold">Employee Gender:</label></td>
					<td><input type="text" id="emp_gender" name="emp_gender" value=""/></td>
				</tr>
				<tr>
					<td><label style="font-weight:bold">Employee Department:</label></td>
					<td><input type="text" id="emp_department" name="emp_department" value=""/></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="SubmitButton" value="Submit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
