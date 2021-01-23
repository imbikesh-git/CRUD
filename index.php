<?php
include('connection.php');
session_start();
if (!isset($_SESSION['email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
    <h1 align="center">WELCOME TO DEEPESHWORI BAKERY</h1>
    <a class="btn btn-danger" href="logout.php">Logout</a>
</body>
</html>