<html>
<head>
	<title>output</title>
</head>
<style>
	
</style>
<body>
	<center>
		<h1>Successfully executed</h1>
	</center>
	<?php
		$servername="localhost";
		$username="root";
		$password="123456";
		$dbname="student";


		$v1= $_POST["name"];
		$v2= $_POST["rollno"];
		$v3= $_POST["age"];
		
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
			die("Conneciton error:".mysqli_connect_error());
		}
		$sql="insert into reg values('$v1','$v2','$v3')";
		if(mysqli_query($conn, $sql)){
			echo "Seccussfully executed";
		}
		else{
			die("Not executed:".mysqli_error($conn));
		}
		mysqli_close($conn);
	?>
</body>
</html>