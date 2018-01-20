<?php
session_start();
// Destroying All Sessions
unset($_SESSION['username']);

// Rdirecting To Home Page
header("Location:login.html");

?>