<?php 
	include  'database.php';
	// mysqli_set_charset($connection, 'utf8');
	$query = mysqli_query($connection, "SELECT * FROM respon");
	while ($hasil = mysqli_fetch_assoc($query)) {
		$data[] = $hasil;
	}
	$json = json_encode($data);
	echo $json;
 ?>