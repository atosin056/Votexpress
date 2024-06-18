<?php

session_start();

include 'connect.php';

if (isset($_GET["id"])) {
	
	header('location: admin.php');

}

$id = $_GET["id"];

$delete = "DELETE FROM `users` WHERE `id`='".$id."'";

$delete_query = mysqli_query($conn, $delete);

if ($delete_query) {
	
	header('location: manageadmin.php');

}

?>