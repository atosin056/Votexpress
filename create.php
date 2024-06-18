<?php

session_start();

include 'connect.php';

if (isset($_POST["sub"])) {
    
    $elections = $_POST["election"];
    
    $photos = $_FILES["photo"];
    

    // Loop through each uploaded file
    
    foreach ($photos["tmp_name"] as $index => $tmp_name) {

    	$election = $elections[$index]; 
        
        // Check if file was uploaded successfully
        
        if ($photos["error"][$index] == 0) {
            
           $allowed = array(
    "jpg" => "image/jpg",
    "jpeg" => "image/jpeg",
    "jfif" => "image/jpeg",
    "png" => "image/png",
    "gif" => "image/gif",
    "bmp" => "image/bmp",
    "tiff" => "image/tiff",
    "svg" => "image/svg+xml"
);


            
            $filename = $photos["name"][$index];
            
            $filesize = $photos["size"][$index];
            
            $filetype = $photos["type"][$index];
            
            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            
            // Check file format and size
            
            if (!array_key_exists($ext, $allowed)) {
            
                die("Please select a valid file format");
            
            }

            
            $maxsize = 5000000000000 * 1024 * 1024;
            
            if ($filesize > $maxsize) {
            
                die("Error: Filesize too Massive");
            
            }

            // Move the uploaded file to the desired location
            
            $move = move_uploaded_file($tmp_name, "candidates/" . $filename);

            	if ($move) {

                    //Crosscheck to make sure that The Current election is closed

                        $select = "SELECT * FROM `elections`";

                        $select_query = mysqli_query($conn,$select);

                        if (mysqli_num_rows($select_query) > 0) {
                            
                            while ($row = mysqli_fetch_assoc($select_query)) {
                                
                                $status = $row["status"];

                                $_SESSION["st"] = $status;

                            }

                        }


                        if ($_SESSION["st"] == "active") {
                            
                            header('location: admin.php?bad=nicetry');

                        }

                        else{
            			
    	            		$insert2 = "INSERT INTO `candidates` (`id`,`candidate_name`,`candidate_pic`,`status`) VALUES (NULL, '".$election."','".$filename."','active')";

    	            		$insert2_query = mysqli_query($conn,$insert2);

    	            		if ($insert2_query) {

    	            			$update = "UPDATE `users` SET `status`='not'";

    	            			$update_query = mysqli_query($conn,$update);

    	            			if ($update_query) {

    	            				header('location: finish.php');

    	            				// print_r($elections);

    	            			}

    	            		}

                        }

            		}
					
					}
            	} 
        	}	 
	


else{
	header('location: admin.php?bad=true');
}
?>
