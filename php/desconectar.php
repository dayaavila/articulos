<?php
	
	require_once "check.php";
	unset($_SESSION["user"]);
	session_destroy();
	header("location: index.php");

?>