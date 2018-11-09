<?php include("auth.php"); ?>
<html>
<head>
<title>Delete</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div align="center">
	<h1>Delete Employee By ID</h1>
	<hr>
	<form action="" method="post">
		<table border "2">
			<tr><td>Enter Employee ID</td>
				<td><input type="text" name="ID"></td>
			</tr>
			<tr><td colspan="22" align="center">
				<button type="submit" class="btn btn-outline-success">Delete Employee</button></td>
			</tr>
		</table>
	</form>
	<hr>
	<a href="dashboard.php"><button class="btn btn-outline-success">Back</button></a><br>
<?php
if($_POST)
	{
		$id=$_POST["ID"];

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
$query="DELETE FROM `employee` WHERE ID=$id";
$z=mysqli_query($x, $query);
if($z)
{print("Employee Deleted<br>");}
else
{print("Deletion Failed<br>");}
}
?>
</div>
</body>
</html>