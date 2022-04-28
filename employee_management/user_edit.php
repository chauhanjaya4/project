<?php
// including the database connection file

include_once("config.php");


if(isset($_GET['ID']))
{	
//getting id from url
$id = $_GET['ID'];

//selecting data associated with this particular id


$sql = "SELECT * FROM wp_users WHERE ID ='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $id = $_GET['ID'];

    $user_login = $_POST['user_login'];
    $password = $_POST['password'];
    $password = md5($password);
    $user_email = $_POST['user_email'];
    

    $sql = "UPDATE wp_users SET user_login='$user_login',user_pass='$password',user_email='$user_email' WHERE ID='$id'";

	//$result = mysqli_query($con, $sql);
	

///	if (mysqli_num_rows($result) > 0) {
		
	//	while($data = mysqli_fetch_assoc($result)){
			
		//}
		
    if ($con->query($sql) === TRUE) {
      echo"<script>
        alert('record updated successfully');
       </script>";
      header('Refresh:1; url=user_view.php');
    } else {
      echo"<script>
        alert('error updating record');
       </script>";
    }
}
?>
<html>
<head>	
	<title>Edit Data</title>
	<style>

@import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');



.login {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
  font-family: 'Comfortaa', cursive;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  border:1px solid #000;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
}

.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border:1px solid #000;
  
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  font-family: 'Comfortaa', cursive;
}

.form input:focus {
  background: #dbdbdb;
}

.form input[type=submit] {
  font-family: 'Comfortaa', cursive;
  text-transform: uppercase;
  outline: 0;
  background: #4b6cb7;
  width: 100%;
 
  
  padding: 8px 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.form button:active {
  background: #395591;
}

.form span {
  font-size: 75px;
  color: #4b6cb7;
}

.btn 
{
  background-color:#4b6cb7;
  width:50%;
  padding: 8px 15px;
  color: #FFFFFF;
  font-size: 14px;
}
		</style>
</head>

<body>
	
	
<div class="login">
	 
  <div class="form" class="login-form">
  <h3 style="padding:10px;margin:5px auto;">Update User Data</h3>
	<form name="form1" method="post" action="">
		
				<label for="user_login" style="display:inline-block">Check Number</label>
				<input type="text" id="user_login" name="user_login" placeholder="Enter Check Number" value="<?php echo $row['user_login'];?>"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'user_login';}"></td>
			
				<label for="user_login" >Password</label>
				<input type="password" name="password" placeholder="Enter Password" value="<?php echo $row['user_pass'];?>"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
			
				<label for="user_login" >Email ID</label>
				<input type="text" name="user_email" placeholder="Enter Email ID" value="<?php echo $row['user_email'];?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'user_email';}">
			
				
				<input type="submit" name="update" value="Update">
			
	</form>
  <a href="user_view.php" class="btn btn-primary text-white">Back To Home</a>
</body>
</html>
