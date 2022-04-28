<?php 
include'header.php';
include'config.php';
$my=$_SESSION['unm'];

// ENTER A NEW PASSWORD

   
  

  // Grab to token that came from the email link
  //$token = $_SESSION['token'];
  
    // select email address of user from the password_reset table 
    
    $new_passErr =  $old_passErr  = "";
    $new_pass  = $old_pass = "";
  if (isset($_POST['new_password'])) { 
  
   
    $new_pass = mysqli_real_escape_string($con, $_POST['new_pass']);
    
    $old_pass = mysqli_real_escape_string($con, $_POST['old_pass']);
    
        $new_pass = md5($new_pass);
        
           
                $sql = "UPDATE wp_users SET user_pass='$new_pass' WHERE `user_login`='$my'";
                $results = mysqli_query($con, $sql);
                <script> location.href='index.php'; </script>
               


        }
        
          else
          {
            echo"<script>
            alert('updated password');
           </script>";
     
           }//else
        
        
        
   
           
        
    

    
      
    
    
    


?>



<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="main.css">
    <style>
        body {
	background: #3b5998;
	font-size: 1.1em;
	font-family: sans-serif;
}
a {
	text-decoration: none;
}
form {
	width: 25%;
	margin: 70px auto;
	background: white;
	padding: 10px;
	border-radius: 3px;
}
h2.form-title {
	text-align: center;
}
input {
	display: block;
	box-sizing: border-box;
	width: 100%;
	padding: 8px;
}
form .form-group {
	margin: 10px auto;
}
form button {
	width: 100%;
	border: none;
	color: white;
	background: #3b5998;
	padding: 15px;
	border-radius: 5px;
}
.msg {
	margin: 5px auto;
	border-radius: 5px;
	border: 1px solid red;
	background: pink;
	text-align: left;
	color: brown;
	padding: 10px;
}

.error {color: #FF0000;}
</style>
</head>
<body>
	<form class="login-form" action="password_reset.php" method="post">
		<h2 class="form-title">New password</h2>
		<!-- form validation messages -->
        
		<div class="form-group">
			<label>New password</label>
			<input type="password" name="old_pass"  required>
            <span class="error">* <?php echo $old_passErr;?></span>
		</div>
		<div class="form-group">
			<label>Confirm password</label>
			<input type="password" name="new_pass" required>
            <span class="error">* <?php echo $new_passErr;?></span>
		</div>
		
		<div class="form-group">
			<button type="submit" name="new_password" class="login-btn">Submit</button>
    
            
		</div>
        <a href="payslip.php" style="width:100%;" class="btn btn-primary text-white">Back To Home</a>
	</form>
</body>
</html>

