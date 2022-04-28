<?php
session_unset();
unset($_SESSION['unm']);
header("location:index.php");

?>