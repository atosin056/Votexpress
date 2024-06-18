<?php

session_start();

include 'connect.php';

if (!isset($_GET["ids"])) {
	
	header('location: admin.php');

}

$id = $_GET["id"];

$delete = "UPDATE `candidates` SET `status`='innactive' WHERE `id`='".$id."'";

$delete_query = mysqli_query($conn, $delete);

if ($delete_query) {





?>