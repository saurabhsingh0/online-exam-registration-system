<?php  
	session_start(); //Starting the session
	$error=''; //variable to store error message
	if(isset($_POST['submit'])){
		if(empty($_POST['username']) || empty($_POST['password'])){
			$error="Username or Password is invalid";
			echo $error;
		}
		else {
			//define username & password
			echo "Login successfull";
			include(connection.php);
			$username=$_POST['username'];
			$password=$_POST['password'];
			//to protect MySQL injection for security 
			$username=stripslashes($username);
			$password=stripcslashes($password);
			$username=mysql_real_escape_string($username);
			$password=mysql_real_escape_string($password);
			$query="SELECT * FROM `students` where `username`='$username' AND `password`='$password'";
			$result=mysqli_query($conn,$query);
			$rows=mysql_num_rows($result);
			if($rows==1){
				//initializing session
				$_SESSION['login_user']=$username;
				//redirecting to another page
				header('location: home.html');
			}
			else {
				$error="Username or Password is Invalid";
			}
			mysqli_close($conn);
		}
	}
?>