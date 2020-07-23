<?php 
	include 'database.php';
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama_lengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];

	$register = mysqli_query($connection, "INSERT INTO user (username, password, nama_lengkap, email) VALUES('$username','$password', '$nama_lengkap', '$email')");

	if ($register) {
		echo "<script>window.location = '../login.php'</script>";
	} 
 ?>