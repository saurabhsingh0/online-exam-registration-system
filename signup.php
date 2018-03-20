<?php  
	require 'connection.php';
	$name=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$college=$_POST['college'];
	$branch=$_POST['branch'];
	$password=$_POST['password'];

	function redirect($url) {
    	ob_start();
    	header('Location: '.$url);
    	ob_end_flush();
    	die();
	}

	// echo $name ." " .$username ." " .$email ." " .$college ." " .$branch ." " .$password;

	$sql="INSERT INTO `students` (`name`, `username`, `email`, `college`, `branch`, `password`) VALUES ('$name', '$username', '$email', '$college', '$branch', '$password')";

	if($conn->query($sql)==TRUE){
		echo "New Record Inserted";
	}
	else {
		echo "Error" .$sql ."<br>" .$conn->error;
	}

	$sql1="SELECT * FROM `students`";
	$result=mysqli_query($conn,$sql1);
	$row=mysqli_fetch_assoc($result);
	print_r($row);

	redirect('http://localhost/online-exam-registration-system/');
?>