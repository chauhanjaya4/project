<?php
include'header.php';


?>
<body class="dashboard-page">
<section class="wrapper scrollable" ">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
				<i class="icon-proton-logo"></i>
				<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h2><b>Admin-Payslip</b></h2>
			</div>

			
			<div class="header-right">
				<div class="profile_details_left">

					<div class="profile_details">
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">
										<span class="prfil-img"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>

<?php
include'config.php';
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `wp_users` WHERE user_role='user' AND CONCAT(`ID`, `user_login`, `user_email`, `user_pass`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `wp_users`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "conveze1_trfconv");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>


        
    <?php
		require_once 'config.php';

		$sql = "SELECT * FROM wp_users  ";
		$result = mysqli_query($con, $sql);
		?>
		<?php

		require_once 'config.php';

		$per_page_record = 50; 
		
		
		
		// Number of entries to show in a page.   
		// Look for a GET variable page if not found default is 1.        
		if (isset($_GET["page"])) {
			$page  = $_GET["page"];
		} else {
			$page = 1;
		}

		$start_from = ($page - 1) * $per_page_record;

		$query = "SELECT * FROM wp_users where user_role='user'    LIMIT $start_from, $per_page_record ";
		$result = mysqli_query($con, $query);
		?>

<div class="container" >
			<h1 class="text-center text-dark"><b><u>Users List</u></b></h1>
			   <form  action="user_view.php" method="post">
          <div class="form" style="display:flex";>  <input type="text" class="form_input" id="myInput" name="valueToSearch" placeholder="Search" placeholder="Search for check number.." title="Type in a name">
            <input class="form_submit" type="submit" name="search" class="form_submit" value="Search" ></div>
	
			<div>
					<a href="register.php" class="btn btn-success text-right" style="margin-bottom:20px;background-color:#0552ffcc;">ADD USER</a>
	</div>
				<div>	<a href="upload_payslip.php" class="btn btn-success " style="margin-bottom:20px;background-color:#0552ffcc;" >Upload Payslip</a><br></div>
            <div class="table-responsive text-dark" >
				<table id="myTable" class="table table-striped table-bordered table-hover" >
                <tr class="tl">



						
						
<th><b>Check Number</b></th>

<th><b>Email</b></th>

<th ><b>Password</b></th>


<th colspan="2" class="text-center"><b>Action</b></th>
                </tr>

      <!-- populate table from mysql database -->
                <?php 
                
                
                
                $i = 1;
                
                while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                <td><b><?php echo $row['user_login']; ?></b></td>
							
							<td><b><?php echo $row['user_email']; ?></b></td>
							<td><b><?php echo $row['user_pass']; ?></b></td>
							
							<td>
								<a href="user_edit.php?ID=<?php echo $row['ID']; ?>" class="btn btn-primary">Update/Edit</a> </td>
							<td>
								<a href="user_delete.php?ID=<?php echo $row['ID']; ?>" class="btn btn-danger">Delete</a>
							</td>
                   
                </tr>

               
                <?php endwhile;?>
				<?php
						$i++;
					
					?>
            </table>
                </div>
        </form>
        <div class="pagination">
				<?php
				$query = "SELECT COUNT(*) FROM wp_users";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_row($result);
				$total_records = $row[0];

				echo "</br>";
				// Number of pages required.   
				$total_pages = ceil($total_records / $per_page_record);
				$pagLink = "";

				if ($page >= 2) {
					echo "<a href='user_view.php?page=" . ($page - 1) . "'>  Prev </a>";
				}

				for ($i = 1; $i <= $total_pages; $i++) {
					if ($i == $page) {
						$pagLink .= "<a class = 'active' href='user_view.php?page="
							. $i . "'>" . $i . " </a>";
					} else {
						$pagLink .= "<a href='user_view.php?page=" . $i . "'>   
                                                " . $i . " </a>";
					}
				};
				echo $pagLink;

				if ($page < $total_pages) {
					echo "<a href='user_view.php?page=" . ($page + 1) . "'>  Next </a>";
				}

				?>
			</div>

			<div class="inline">
                <input id="page" type="number" min="1" max="<?php echo $total_pages ?>" placeholder="<?php echo $page . "/" . $total_pages; ?>" required>
                <button onClick="go2Page();">Go</button>




		</div>

	</div>
	</section>
	
    </body>
    <script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable({
				"lengthMenu": [
					[10, 25, 50, -1],
					[10, 25, 50, "All"]
				]
			});
		});
	</script>

	<script>
		function go2Page() {
			var page = document.getElementById("page").value;
			page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));
			window.location.href = 'user_view.php?page=' + page;
		}
	</script>
</html>