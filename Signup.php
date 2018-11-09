<?php include("auth.php"); ?>
<html>
<head>
<title>Sign Up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div align="center">
	<h1>Add Admin Here</h1>
	<hr>
	<form action="" method="post">
	<table align="center" border "2">
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="Fname"></td>
		</tr>
		<tr>
			<td>Enter Username</td>
			<td><input type="text" name="Username"></td>
		</tr>
		<tr>
			<td>Enter Password</td>
			<td><input type="password" name="Password"></td>
		</tr>
		<tr>
		<td>Enter Email</td>
			<td><input type="email" name="Email"></td>
		</tr>
		<tr>
			<td>Enter Mobile No.</td>
			<td><input type="text" name="Mobile"></td>
		</tr>
		<tr>
			<td colspan="22" align="center">
			<button type="submit" class="btn btn-ouline-success">Sign Up</button></td>
		</tr>
	</table>
	</form>
	<hr>
	<a href="index.php"><button class="btn btn-ouline-success">Back To Home</button></a><br>
<?php
if($_POST)
{
	$fn=$_POST["Fname"];
	$un=$_POST["Username"];
	$pass=$_POST["Password"];
	$em=$_POST["Email"];
	$mob=$_POST["Mobile"];
	$x=mysqli_connect("localhost","root","");
	if($x)
	{
		print("Server Connected<br>");
	}
	else
	{
		print("Server Connection Failed<br>");
	}
	$d=mysqli_select_db($x,"zenith");
	if($d)
	{
		print("Database Connected<br>");
	}
	else
	{
		print("Database Connection Failed<br>");
	}
	$query="INSERT INTO users VALUES ('$fn','$un','$pass', '$em','$mob')";
	$z=mysqli_query($x, $query);
	if($z)
	{
		print("You have succesfully Signed Up<br>");
	}
	else
	{
	print("Sorry. Sign Up Failed<br>");
	}
}
?>
</div>
</body>
</html>