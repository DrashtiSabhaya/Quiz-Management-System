<?php
	session_start();
	$_SESSION['username']=null;
	session_destroy();
	header("location:index.php");
?>