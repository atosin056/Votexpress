<?php

session_start();

if (!isset($_SESSION["ad-username"])) {
	
	header('location: login.php');

}

else{

	$log = session_destroy();

	if ($log) {
		
		session_destroy();

		header('location: login.php');

	}

}

?>