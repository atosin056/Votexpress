<?php

session_start();

include 'connect.php';

if (!isset($_SESSION["electionName"])) {

	header('location: admin.php?bad=true');

}
	$insert1 = "INSERT INTO `elections` (`id`,`electionName`,`status`) VALUES (NULL, '".$_SESSION["electionName"]."','active')";

	$insert1_query = mysqli_query($conn,$insert1);

	if ($insert1_query) {

		header('location: admin.php?good=Created');

	}

?>