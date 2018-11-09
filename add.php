<?php include("auth.php"); ?>
<html>
<head>
<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div align="center">
	<h1>Add Employee Here</h1>
		<hr>
		<form action="" method="post">
			<table border="2">
				<tr>
					<td>Employee ID</td>
					<td><input type="text" name="ID"></td>
				</tr>
			<tr>
				<td>First Name</td>
				<td><input type="text" name="Fname"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="Lname"></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="text" name="Mobile"></td>
			</tr>
			<tr>
				<td>Department</td>
				<td><input type="text" name="Department"></td>
			</tr>
			<tr>
				<td>Salary</td>
				<td><input type="text" name="Salary"></td>
			</tr>
			<tr>
				<td colspan="22" align="center"><button type="submit" class="btn btn-outline-success">Add Employee</button></td>
			</tr>
		</table>
		</form>
		<hr>
		<a href="dashboard.php"><button class="btn btn-outline-success">Back</button></a><br>
<?php
if($_POST)
{
$id=$_POST["ID"];
$fn=$_POST["Fname"];
$ln=$_POST["Lname"];
$mob=$_POST["Mobile"];
$dp=$_POST["Department"];
$sal=$_POST["Salary"];

$x=mysqli_connect("localhost","root","");
if($x)
{print("Server connected<br>");}
else
{print("Server connection Failed<br>");}
$d=mysqli_select_db($x,"zenith");
if($d)
{print("Database connected<br>");}
else
{print("Database connection Failed<br>");}
$query="INSERT INTO employee VALUES ($id,'$fn','$ln','$mob','$dp',$sal)";
$z=mysqli_query($x, $query);
if($z)
{print("Employee Added Successfully<br>");}
else
{print("Employee Not Added<br>");}
}
?>
</div>
</body>
</html>