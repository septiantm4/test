<?php
	$url = file_get_contents("http://192.168.0.200/api/pengguna.php");
	$result = json_decode($url, true);
	if($result['status'] == true){
		foreach($result['data'] as $row){
			echo "Username : ".$row['username_pengguna'];
			echo "<br>Nama :".$row['nama_pengguna'];
		}
	}
?>
	