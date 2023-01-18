<!DOCTYPE html>

<html lang="en-us">

<head> <title>Employee Details</title> </head>

<body>

<h1>Employee Details</h1>

<form class="emp" action="http://localhost/dbdisplay.php" method="post">

<br><h3>Search Employee Details Based on Employee ID</h3>

<br>Enter Employee ID:<input type="number" id="Id" name="Id" >

<br><br><input type="submit" value="Search" onclick="SaveEmpDetails()">

</form>

<form class="emp" action="http://localhost/dbdisplay.php" method="post">

<br><h3>Search Employee Details Based on Salary</h3>

<br>Enter Employee Salary Range:<input type="number" id="SS" name="SS" >

Between

<input type="number" id="LS" name="LS" >

<br><br><input type="submit" value="Search" onclick="SaveEmpDetails()">

</form>

</body>

</html>

</body>

</html>
-----------------------php------------
<?php

$servername = "localhost"; // default

$username = "root"; // root is a username

$password = ""; // No password for my db that why it is blank

$dbname = "Employee"; // mydb is my db name

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {

die("Connection failed: " . mysql_connect_error());

}
if($_POST["Id"]!=0) // search using ID

{

$v1=$_POST["Id"];

$sql = "SELECT * from emp where Id=$v1";
}
else // search using salary

{

$v2=$_POST["SS"];

$v3=$_POST["LS"];

$sql = "SELECT * from emp where Salary between $v2 AND $v3";

}

$result = mysqli_query($conn, $sql); // conn for connection execute query

// Result processing

if (mysqli_num_rows($result) > 0)

{

// output data of each row

while($row = mysqli_fetch_array($result))

{

print "Employee ID: " . $row["Id"]."<br><br>";

print "Employee Name: " . $row["Name"]."<br><br>";

print "Employee Department: " . $row["Dept"]."<br><br>";

print "Employee Salary: " . $row["Salary"]."<br><br>";

print "*********************" ."<br><br>";

}

}

else

{

echo "0 results";

}

mysqli_close($conn);// close the database

?>



