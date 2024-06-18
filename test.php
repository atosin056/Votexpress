<?php

include 'connect.php';

$insert = "INSERT INTO `users` (`id`,`username`,`password`,`picture`) VALUES (NULL, 'admin', '".md5('admin123')."','Tosin.jpg')";

$insert_query = mysqli_query($conn,$insert);

if ($insert_query) {

    echo "Done";

}

?>