<?php  
	$servername="localhost";
	$user_name="root";
	$pword="";
	$db_name="online-exam-registration-system";

	//create new connection
	$conn = mysqli_connect($servername,$user_name,$pword,$db_name);
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}

	// $sql="SELECT * FROM `students`";
	// $result=mysqli_query($conn,$sql);

	// $row=mysqli_fetch_assoc($result);
	// print_r($row);

	//mysqli_close($conn);


?>