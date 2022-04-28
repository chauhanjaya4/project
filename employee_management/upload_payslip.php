
<?php
  
  include'config.php';
// Check if form was submitted
if(isset($_POST['submit'])) 
{



// Configure upload directory and allowed file types
$upload_dir = 'uploads'.DIRECTORY_SEPARATOR;
$allowed_types = array('pdf');

// Define maxsize for files i.e 2MB
//$maxsize = 2 * 5024 * 5024;

// Checks if user sent an empty form
if(!empty(array_filter($_FILES['files']['name']))) 
{
   // Loop through each file in files[] array
		foreach ($_FILES['files']['tmp_name'] as $key => $value) {

			$file_tmpname = $_FILES['files']['tmp_name'][$key];
			$file_name = $_FILES['files']['name'][$key];
			$file_size = $_FILES['files']['size'][$key];
			$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

			// Set upload file path
			$filepath = $upload_dir.$file_name;
    }//for each
			// Check file type is allowed or not
			if(in_array(strtolower($file_ext), $allowed_types)) {

				// Verify file size - 2MB max
			

					// If file with name already exist then append time in
				// front of name of the file to avoid overwriting of file
				if(file_exists($filepath)) {

          echo"<script>
        alert('file already exists');
       </script>";
					$filepath = $upload_dir.time().$file_name;
        }//file exists

					else 
          
          { 
            
            move_uploaded_file($file_tmpname, $filepath);

            echo"<script>
            alert('file uploaded successfully');
           </script>";
            header('Refresh:5; url=user_view.php');
						
					}//else
					
        }//if in array
				

        
		                                                         }




}   //if empty


                   
?>

<!DOCTYPE html>
<head>
<title>Support</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->

<style>

	
@import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');

body {
  background: url(images/trf.jpg) no-repeat;
  background-attachment: fixed;
  background-size: cover;
  display: grid;
  align-items: center;
  justify-content: center;
  height: 100vh;
  
  margin: 0 0;
}


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
.form label {
  outline: 0;
  background: #b2b5bb;
  /*width: 100%;*/
  border:1px solid #000;
  
  margin: 0 0 42px;
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
  font-family: Arial, Helvetica, sans-serif;
  font-weight:bold;
  color:#161515;
}

.form input:focus {
  background: #dbdbdb;
}

.form input[type=submit] {
  font-family:Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #b2b5bb;
  width: 100%;
 
  
  padding: 8px 15px;
  color: #161515;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form input[type=file] {
  font-family: 'Comfortaa', cursive;
  text-transform: uppercase;
  outline: 0;
  border:none;
  width: 100%;
 
  
  padding: 8px 15px;
  color: #000000;
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
	</style>
</head>
<body >
<div class="login">

	 <div class="form" class="login-form">
  
				<form name="frm" action="" method="post" enctype="multipart/form-data">
					
       <div> <label  >Upload Payslip:</label>    </div>
					<input type="file" name="files[]" multiple id="myfile" >
					<br><br>
				
					<input type="submit" name="submit" class="btn btn-primary" value="Upload" required>
				</form>
				<a href="user_view.php" class="btn btn-primary text-white">Back To Home</a>
			</div>
			
			
			
		</div>
	<script src="js/proton.js"></script>
  <script type="text/javascript"> 
     window.setTimeout(function() {
    $("#deletesuccess").fadeTo(20, 0).slideUp(20, function(){
        $(this).remove(); 
    });
}, 1200);
    </script>
</body>
</html>


