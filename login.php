<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>E-Learning</title>
	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

		<!----css file link-->
	
	<link rel="stylesheet" type="text/css" href="css/login.css">

	   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Google Client id to integrate google signin-->

	<meta name="google-signin-client_id" content="808976312783-k901nr0n50did222qa275k0umvn4rpi1.apps.googleusercontent.com">
	

	<!-- Google JavaScript file to integrate google signin-->
	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<!-- Google custom JavaScript file to integrate google signin-->
	<script type="text/javascript" src="js/google_signin.js"></script>


	<!----------email notification-------->

<script type="text/css">
	





</script>

</head>
<body>
			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<h1 style="color: white;margin-top: 10px;" id="myhead">E-Learning</h1>
			</div>
			
		</div>
	</nav>
		

			<!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading" >Login</h3>
						
						<div class="modal-body" id="Login" >
						<div class="center-box">
						<form method="POST" action="validation.php" onsubmit="return validation()">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>Username :</label>
								<input type="text" autocomplete="off" name="name" class="form-control" id="username" onkeypress="clear()">
								<label><i class="fa fa-lock fa-2x"></i>Password :</label>
								<input type="password" autocomplete="off" name="password" class="form-control" id="password">
								<span id="perror"><?php 
								if(isset($_SESSION['error']))
								{
									echo "wrong username or password";
								} 
								else{ echo " ";} 
								?>
								</span>
								<button id="btn-login" type="submit">Login</button>
							</div>
							<div class="register">
								<h3>Don't have an account?&nbsp<span id="create-account"><a href="signup.php"><u>Create Account</u></span></a> </h3>
							</div>	
						</div>
					</form>
					<!-- <div class="right-box">
						<span class="signinwith">Sign in With <br> Google</span>

						<button class="social facebook">Log in with Facebook</button>
						<button class="social twitter">Log in with twitter</button>
						<button type="submit" class="social facebook" data-onsuccess="onSignIn()">Log in with Facebook</button>
						<button type="submit" class="social twitter" data-onsuccess="onSignIn()">Log in with Twitter</button>
						<button type="submit" class="social google g-signin2" data-onsuccess="onSignIn()">Log in with gmail</button>
					</div> -->
					</div>						
				</div>
			</section>
			

			<!---Slider Section ends------->

			<!---confirm password validation Start------->

<script type="text/javascript">
	
function validation() {
	var username=document.getElementById('username').value;
	var password=document.getElementById('password').value;

	if ((username=="") ||( password==""))
	 {
	 	document.getElementById('perror').innerHTML="Please fill the details";
	 	return false;
	 }
}


function clear() {
	document.getElementById('perror').innerHTML="ksdfisdhfg";
}

</script>
         <!---confirm password validation end------->

       

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>

</body>
</html>