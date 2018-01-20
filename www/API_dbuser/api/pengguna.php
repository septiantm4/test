<?php
	require_once("connection.php");
	$hasil = array();
	$sql = "SELECT * FROM pengguna where id_pengguna=1";
	$query = $mysqli->query($sql);
	if($query->num_rows > 0){
		while($row=$query->fetch_assoc()){
			$hasil[] = $row;
		}
		$result = array('status' => true, 'message' => 'Data show succes', 'data' => $hasil);
	}
	echo json_encode($result,true);

?>