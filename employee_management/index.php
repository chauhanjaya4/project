<?php

session_start();
session_unset();

include 'config.php';

if (isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($con,trim($_POST['unm']));
	$password =mysqli_real_escape_string($con,trim($_POST['pwd']));
	$password =md5($password);
	

	$sql = "SELECT * FROM hd_users WHERE email ='$username' and pasword = '$password'";

	
	$result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		$logged_in_user = mysqli_fetch_assoc($result);
		
		

			$_SESSION['unm'] = $logged_in_user;
			$_SESSION['success']  = "You are now logged in";
			header('location: user_view.php');	
		
		  
		
		}
	} else {
		echo"<script>
        alert('user name or password is incorrect');
       </script>";
	}

?>
<!DOCTYPE html>

<head>
	<title>Convergence TRF</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- bootstrap-css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="css/font.css" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
</head>

<body class="signup-body"  style="background: url('images/trf.jpg') no-repeat ;" >
<div><img src="images/1.png" style="float:right;margin:50px;padding:10px auto;height:5%;width:5%;"	></div>
<div><img src="images/trfltd-logo.png"  style="float:left;margin:50px;padding:10px auto;height:10%;width:10%;"	></div>

<div class="agile-signup" >

		<div class="content2">
			<div class="grids-heading gallery-heading signup-heading">
				<p><?php @$err;?></p>
				<h2>USER LOGIN</h2>
			</div>
			<form name="frm" action="" method="POST" enctype="multipart/form-data">
				<input type="text" name="unm" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';} required">
				<input type="password" name="pwd" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password'; } required">
				<br> <br>
				<input type="submit" name="submit" class="btn btn-primary" style="width:50%;" value="Login">
				
			</form>

		</div>

	

	</div>
	<script src="js/proton.js"></script>
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
</body>

</html>

