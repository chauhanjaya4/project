<?php
include'config.php';
include'header.php';
// Create connection

if(isset($_POST["submit"]))
{
	$emp_name = $_POST['emp_name'];
  $user_pass = $_POST['password'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];
  $dob = $_POST['dob'];
	
	$department = $_POST['department'];
  $user_pass = md5($user_pass);

  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];    
	  $folder = "image/".$filename;

	$sql = "SELECT * FROM wp_users where user_login='$user_login' and user_pass='$user_pass' ";

	
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) 
  {
        // output data of each row
        echo"<script>
        alert('user name or password already exists');
       </script>";
           
    }  // while($row = mysqli_fetch_assoc($result)) {
else
{
$sql = "INSERT INTO hd_users (emp_name, password,email,mobile,address,dob,department,picture)
VALUES ('$emp_name', '$user_pass','$email','$mobile','$address','$dob','$department','$filename')";
move_uploaded_file($tempname, $folder);
if ($con->query($sql) === TRUE) {
   header('Location:user_view.php');
   } 
else
{
  echo"<script>
  alert('Error inserting file.');
 </script>";
}//conn query

  }//msqli__num_rows



  

  } //isset   

        
$con->close();
?>





	




	</style>
</head>
<div><img src="images/1.png" style="float:right;margin:50px;padding:10px auto;height:5%;width:5%;"	></div>
<div><img src="images/trfltd-logo.png"  style="float:left;margin:50px;padding:10px auto;height:10%;width:10%;"	></div>
<body >

<div class="login1">

	 <div class="form1" class="login-form1">
				<form name="frm1" action="" method="post" enctype="multipart/form-data">
        <label for="emp_name" >Name</label>
					<input type="text" name="emp_name"  placeholder="enter Name"  required>
					<label for="user_email" >Email id</label>
					<input type="email" name="email" value="Email" placeholder="enter email id" required>
          <label for="user_pass" >Password</label>
          <input type="password" name="password" value="password" placeholder="enter password" required>
          <label for="mobile" >Mobile</label>
          <input type="text" name="mobile" value="mobile" placeholder="enter Mobile" required>
          <label for="address" >Address</label>
          <input type="text" name="address" value="address" placeholder="enter Address" required>
          <label for="dob" >Date Of Birth</label>
          <input type="text" name="dob"  placeholder="enter Date  Of Birth"  required>
          <label for="picture" >Date Of Birth</label>
          <input type="file" name="uploadfile"  placeholder="Upload photo"  required>
          <label for="department" >Department</label>
          <input type="text" name="department"  placeholder="enter Department"  required>
          <br><br>
				
					<input type="submit" name="submit" class="btn btn-primary" value="Add User">
				</form>
				<a href="user_view.php" class="btn btn-primary text-white">Back To Home</a>
			</div>
			
			
			
		</div>

    
	<script src="js/proton.js"></script>
</body>

<script type="text/javascript"> 
     window.setTimeout(function() {
    $("#deletesuccess").fadeTo(20, 0).slideUp(20, function(){
        $(this).remove(); 
    });
}, 1200);
    </script>
</html>


