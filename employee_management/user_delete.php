
<html>
<?php

require_once 'config.php';

if(isset($_GET['ID']))
{
    $id=$_GET['ID'];
    
    
    $sql = "SELECT * FROM wp_users where ID='$id' ";

	
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
        // output data of each row
        
           
            while($row = mysqli_fetch_assoc($result)) {
          if(($row['user_role'] == 'admin')||($row['user_role'] == 'SuperAdmin'))
          {
            header('Location:user_view.php');
            echo"<script>
            alert('only users data can be deleted');
           </script>";

           
            // echo"only users data can be deleted";
              //header('Location:user_view.php');
          }
            
          else {
            //echo "user_role: " . $row["user_login"];
           mysqli_query($con, "DELETE  FROM wp_users WHERE ID='$id'");
            header('Location:user_view.php');
          }
            }
      } 
}
?>
</html>