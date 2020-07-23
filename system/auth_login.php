<?php 
include  'database.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($connection, "select * from user where username='$username' AND password='$password'");

$pengecekan = mysqli_num_rows($login);

if ($pengecekan > 0) {
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status_login'] = "login";
	header('Location: ../dashboard.php');
} else {
	echo "akun tidak ada di database";
} 
 ?>
