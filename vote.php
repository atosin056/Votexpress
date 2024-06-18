<?php

include 'connect.php';

session_start();

if (!isset($_SESSION["username"])) {

	header('location: index.php');

}

if (!isset($_GET["id"])) {
	
	header('location: dashboard.php');

}

$id = $_GET["id"];

$select = "SELECT * FROM `candidates` WHERE `id`='".$id."'";

$select_query = mysqli_query($conn,$select);

if (mysqli_num_rows($select_query) > 0) {

	$update = "UPDATE `candidates` SET `no_of_votes`=`no_of_votes`+1 WHERE `id`='".$id."'";

	$update_query = mysqli_query($conn,$update);

	if ($update_query) {
		
		$update1 = "UPDATE `users` SET `status`='voted' WHERE `username`='".$_SESSION["username"]."'";

		$update1_query = mysqli_query($conn,$update1);

		if ($update1_query) {
			
			header('location: dashboard.php');

		}

	}

}

?>