<?php
session_start();
if (empty($_SESSION['unm'])) {
	header("location:index.php");
}
?>
<!DOCTYPE html>
<head>
	<title>TRF Payslip</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
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
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;500;600;700&display=swap" rel="stylesheet">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
	<!-- //font-awesome icons -->
	<script src="js/jquery2.0.3.min.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/jquery.cookie.js"></script>
	<script src="js/screenfull.js"></script>
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- bootstrap-css -->
	<link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery2.0.3.min.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/jquery.cookie.js"></script>
	<script src="js/screenfull.js"></script>
	<script>
		$(function() {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function() {
				screenfull.toggle($('#container')[0]);
			});
		});
	</script>
	<script>
		$(function() {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function() {
				screenfull.toggle($('#container')[0]);
			});
		});
	</script>
	<!-- charts -->
	<script src="js/raphael-min.js"></script>
	<script src="js/morris.js"></script>
	
	<link rel="stylesheet" href="css/morris.css">
	<!-- //charts -->
	<!--skycons-icons-->
	<script src="js/skycons.js"></script>
	<!--//skycons-icons-->


<style>


.login1 {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
  font-family: 'Comfortaa', cursive;
}

.form1 {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  border:1px solid #000;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
}

.form1 input {
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
.form1 label {
  /*outline: 0;
  background: #f2f2f2;
  width: 100%;
  border:1px solid #000;
  
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  font-family: 'Comfortaa', cursive;*/
}

.form1 input:focus {
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
.form1 input[type=file] {
  font-family: 'Comfortaa', cursive;
  text-transform: uppercase;
  outline: 0;
  border:none;
  width: 100%;
 
  
  padding: 8px 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form1 button:active {
  background: #395591;
}

.form1 span {
  font-size: 75px;
  color: #4b6cb7;
}




.download-list__wrap {
  margin: auto;
  display:block;

  padding: 3px 0;
}

.download-list {
  list-style: none;
  padding: 0 12px 4px;
  margin: 0;
}

.button-area {
  opacity: 0;
  text-align: right;
  padding: 12px;
  -webkit-transition: opacity 600ms ease-out;
  transition: opacity 600ms ease-out;
}

.button-area.show {
  opacity: 1;
}

.item {
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  margin-top: 100px;
  margin:50px ;
  padding: 4px 0;
 
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
  border-radius: 4px;
  height:250px;
}
.item .src {
  grid-column: 2/8;
  padding: 0 0.3em;
  font-size: 15px;
}
.item .src .name {
  font-weight: bold;
}
.item .src .ext {
  grid-column: 2/6;
  float: left;
}
.item .src .size {
  grid-column: 2/6;
  text-align: right;
}
.item .btn {
  grid-column: 2/8;
  margin: 4px;
}
.item .btn a {
  color: white;
  //padding: 0.5em 4em;
  text-decoration: none;
  transition: background-color 300ms linear;
}
.item .btn a:hover {
  background: blue;
}

.item > div:not(.src) {
  display: grid;
  place-items: center;
}

.js-clear-btn {
  font-size: 15px;
}

.dl-all-btn, .btn a {
  background-color: #0075FF;
 // border-radius: 2em;
  color: white;
  padding:15px;
}

.dl-all-btn {
  cursor: pointer;
  font-weight: bold;
  margin-left: 1em;
  padding: 0.8em 1.5em;
}

.fiv-viv fiv-icon-pdf 
{

  background-image:url('pdf.png');
}


.icon{
  display: inline-block;
    margin-bottom: 0;
    font-weight: 700;
    text-align: center;
    vertical-align: middle;
    text-transform: uppercase;
    cursor: pointer;
    background-image: none;
    border: 0;
    border-color: rgba(0, 0, 0, 0.07) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.18);
    white-space: nowrap;
    padding: 8px 15px;
    border-radius: 3px;
    color: #fff;
    letter-spacing: 0.02em;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;

}





#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
   width: 100%;
 
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

#myInput {
  
  background-position: 10px 10px;
  background-repeat: no-repeat;
  
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  
  width:40%;
  margin-left:400px;
 
  color:#000000;
  
}
.form{
	display:flex;
}
.form .form_input {
	
	margin: 10px;
	border: none;
	padding: 10px !important;
	border-radius: 10px;
	background-color: #E6E6E6;
	outline: 3px solid transparent;
	transition: outline .2s, flex-basis .2s;
	margin-bottom: 50px;
  margin-top: 50px;
 

  
}
.form .form_input:nth-child {
	flex: 3 1 300px;
}
.form .form_input:hover,
.form .form_input:focus {
	outline: 3px solid #708DFD;
}

.form .form_submit {
	position: relative;
		top: -5px;
	
	margin: 10px;
	cursor: pointer;
	border: none;
	padding: 10px;
	border-radius: 10px;
	background-color: #0552ffcc;
	color: #FFFFFF;
	box-shadow: 0 12px 7px -5px rgba(0,0,0,0.35);
	transition: box-shadow .2s, top .2s, background-color .2s, flex-basis .2s;
	width: 200px;
	margin-bottom: 50px;
  margin-top: 50px;
  margin-right:400px;
}
.form .form_submit:hover,
.form .form_submit:focus {
	box-shadow: 0 0 0 0 rgba(0,0,0,0.35);
	top: 0;
}
.form .form_submit:focus {
	background-color: #4A65CE;
	outline: 0;
}
</style>
</style>
</head>

