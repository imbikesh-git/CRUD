<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phpcrud';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
	echo "";
} else{
	die('connection failed because of'. mysqli_connect_error());
}

?>