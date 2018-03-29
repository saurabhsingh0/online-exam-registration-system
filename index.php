<?php 
	include('login.php');

	if(isset($_SESSION['login_user'])){
		header('location: home.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="title">
		<p>Online Exam Registration System</p>
	</div>
	<div class="container">
		<form action="" method="POST">
			<div class="box">
				<p>SIGN IN</p>
				<label for"username"><b>UserName</b></label>
				<input type="text" name="username" placeholder="Enter Username" required>
				<label for"password"><b>Password</b></label>
				<input type="password" name="password" placeholder="Enter Password" required>
				 <button type="submit" name="submit">Login</button>
				<label>
				  <input type="checkbox" checked="checked" name="remember"> Remember me
				</label>
			</div>
		</form>
			<div class="box">
				<button type="button" class="cancelbtn">Cancel</button>
	    		<span class="psw">Forgot <a href="#">password?</a></span><br>
	    		<span class="signup">NEW USER <a href="signup.html">SIGN UP</a></span>
			</div>
			<span><?php echo $error; ?></span>
	</div>
	<div class="footer">
		<p>Developed by </p>
	</div>

</body>
</html>