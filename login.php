<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
</head>
<body>
<div align="center">
	<h1>Log In Here</h1>
	<form action="" method="post">
		<table border "2">
			<tr><td>Enter Username</td>
				<td><input type="text" name="Username"></td>
			</tr>
			<tr><td>Enter Password</td>
				<td><input type="password" name="Password"></td>
			</tr>
				<tr><td colspan="22" align="center">
					<button type="submit" class="btn btn-ouline-success">Log In</button></td>
			</tr>
		</table>
	</form>
	<hr>
	<a href="index.php"><button class="btn btn-ouline-success">Back To Home</button></a><br>
<?php
session_start();
if($_POST)
	{
		$username=$_POST['Username'];
$password=$_POST['Password'];

$con=mysqli_connect("localhost","root","");
if($con)
{print("Server connected<br>");}
else
{print("Server connection Failed<br>");}
$d=mysqli_select_db($con,"zenith");
if($d)
{print("Database connected<br>");}
else
{print("Database connection Failed<br>");}

$query = "SELECT * FROM users WHERE Username='$username' and Password='$password'";
$result = mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
if($rows==1)
{
$_SESSION['Username'] = $username;
header("Location: dashboard.php");
}
else
{
echo "Username/password is incorrect.";
}
}
?>
<hr>
</div>
</body>
</html>