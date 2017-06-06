<?php
session_start();

if (!$_SESSION['uname']) {
	header('Location: login.php');
}
echo "i m from dashboard";

?> 
<a href="logout.php">logout</a>

