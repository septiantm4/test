<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'admin_track';

$mysqli = new mysqli($host,$username,$password,$database);

if(mysqli_connect_errno()){
	die("Gagal menghubungkan dengan Database.<br/>".$mysqli_connect_error());
}
?>