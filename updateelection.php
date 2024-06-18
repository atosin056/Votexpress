<?php

session_start();

include 'connect.php';

if (isset($_GET["id"])) {
	
	header('location: admin.php');

}

$id = $_GET["id"];

$delete = "UPDATE `elections` SET `status`='closed' WHERE `id`='".$id."'";

$delete_query = mysqli_query($conn, $delete);

if ($delete_query) {

	$update = "UPDATE `candidates` SET `status`='old'";

	$update_query = mysqli_query($conn,$update);

	if ($update_query) {

		header('location: admin.php');

	}

}

?>