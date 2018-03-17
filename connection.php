<?php  
	$servername="localhost";
	$username="root";
	$password="";
	$db_name="online-exam-registration-system";

	//create new connection
	$conn = mysqli_connect($servername,$username,$password,$db_name);
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}

	$sql="SELECT * FROM `students`";
	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_assoc($result);
	print_r($row);

	mysqli_close($conn);


?>