<?php
session_start();
include'config.php';
define('HOST', $host);
define('USER', $username);
define('PASSWORD', $password);
define('DATABASE', $database);
include 'class/Database.php';
include 'class/Users.php';
include 'class/Time.php';
include 'class/Tickets.php';
include 'class/Department.php';
$database = new Database;
$users = new Users;
$time = new Time;
$department = new Department;
$tickets = new Tickets;
?>
