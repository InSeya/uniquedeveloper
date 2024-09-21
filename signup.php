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
						<h3 id="login-heading" >SignUp</h3>
						
						<div class="modal-body">
						<div class="center-box">
                    <form method="POST" action="registration.php"> 
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>&nbspUsername :</label>
								<input type="text" name="name" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>&nbspPassword :</label>
								<input type="text" name="password" class="form-control" id="pwd">

								<label><i class="fa fa-user fa-2x"></i>&nbspConfirm Password :</label>
								<input type="text" name="confirm_password" class="form-control" id="cpwd">

								<label><i class="fa fa-lock fa-2x"></i>&nbspEmail id :</label>
								<input type="text" name="email" class="form-control">
								<div id="errorlabel"></div>
								<button id="btn-login" type="submit"><a id="sign" href="index.php"></a>Signup</button>
							</div>
						</form>
                       <h2>Already have an acc?<a id="sign" href="login.php">Login</a></h2>
					</div>						
				</div>
			</section>
			

			<!---Slider Section ends------->

			<!---confirm password validation Start------->

<script type="text/javascript">
	
    $(document).ready(function(){
    
    $('#cpwd').keyup(function(){
        var pwd=$('#pwd').val();
        var cpwd=$('#cpwd').val();
        if (cpwd!=pwd) 
        {
            $('#errorlabel').html('**passwords are not matched');
            $('#errorlabel').css('color','red');
            return false;
        }
        else
        {
            $('#errorlabel').html('');
            return true;
        }
    });
    
    });
    
    </script>
             <!---confirm password validation end------->
    

       

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>

</body>
</html>