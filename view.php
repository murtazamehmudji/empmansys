<?php include("auth.php"); ?><html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles.css">
<style>
table
{
border-style:solid;
border-width:2px;
border-color:pink;
width: 80%;
}
th
{
  color: white;
}
</style>
</head>
<body>
  <div align="center">
<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
 
mysqli_select_db($con,"zenith");
 
$result = mysqli_query($con,"SELECT * FROM employee");
 
echo "<table border='1'>
<tr>
<th>Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Mobile</th>
<th>Department</th>
<th>Salary</th>
</tr>";
 
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['Fname'] . "</td>";
  echo "<td>" . $row['Lname'] . "</td>";
  echo "<td>" . $row['Mobile'] . "</td>";
  echo "<td>" . $row['Department'] . "</td>";
  echo "<td>" . $row['Salary'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
 
mysqli_close($con);
?>
<a href="dashboard.php"><button class="btn btn-outline-success">Back</button></a>
</div>
</body>
</html>