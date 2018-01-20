<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['signin'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "","dbuser");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("user", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from user where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['uuid']=$row['id_pengguna'];
$_SESSION['nama']=$row['nama'];
$_SESSION['username']=$row['username'];

header("location:baru/index.html"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>