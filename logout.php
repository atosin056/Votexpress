<?php

session_start();

if (!isset($_SESSION["username"])) {
	
	header('location: index.php');

}

else{

	$log = session_destroy();

	if ($log) {
		
		session_destroy();

		header('location: index.php');

	}

}

?>