<?php

session_start();

include 'connect.php';

if (!isset($_SESSION["ad-username"])) {
    
    header('location: login.php');

}

?>

<?php

// ini_set('display_startup_errors', 1);
// ini_set('display_errors', 1);
// error_reporting(-1);

include 'connect.php';

if (!isset($_SESSION["ad-username"])) {
    
    header('location: login.php');

}

if (isset($_POST["submit"])) {
    
    $username = $_POST["username"];

    $password = $_POST["password"];

    //Proofed One

    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] <= 0) {
        
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png", "PNG" => "image/PNG", "gif" => "image/gif");

        $filename = $_FILES["photo"]["name"];

        $filetype = $_FILES["photo"]["type"];

        $filesize = $_FILES["photo"]["size"];

        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if (!array_key_exists($ext, $allowed)) {
            
            die("Please select a valid file format");

        }
        
        $maxsize = 5000000000000 * 1024 * 1024;

        if ($filesize > $maxsize) {
            
            die("Error: Filesize too Massive");

        }

        if (in_array($filetype, $allowed)) {
            
            // if (file_exists("admin/" . $filename)) {
                
            //     echo $filename . "Already Exists";

            // }

            // else{

                $move = move_uploaded_file($_FILES["photo"]["tmp_name"], "admin/". $filename);

                if ($move) {
                    
                    $insert = "INSERT INTO `administrators` (`id`,`username`,`password`,`profile`) VALUES (NULL,'".$username."','".md5($password)."','".$filename."')";

                    $insert_query = mysqli_query($conn,$insert);

                    if ($insert_query) {
                        
                        header('location: admin.php');

                    }


                

            }

        }

    }

}

?>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <!-- This Application was Redesigned from The original E-vote Application also created by Akinfenwa Oluwatosin Lloyd in 2021 -->

    <!-- All Rights Reserved -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="icon" type="image/png" href="Fav1.gif" sizes="32x32"> -->

    <link rel="stylesheet" href="assets/bootstrap/css/mdb.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link rel="icon" type="image/png" href="images/icon.png">

    <title>VoteXpress - An Electronic Voting Application | Akinfenwa Oluwatosin | Login as an Administrator</title>

    <style>

    .landing-page{
            display: flex;
            align-items: center;
            padding: 20px 0;
            height: 617px;
        }
        .landing-page .landing-adminimage-container{
            margin-bottom: 30px;
        }
        .landing-page .RemoveBGlanding-image{
            width: 100%;
            height: 100%;
        }
        .landing-page .landing-image img{
            width: 100%;
            height: 100%;
        }
        .landing-page .sign-in{
            display: flex;
            height: 100%;
            justify-content: center;
            align-items: center;
        }
        .landing-page .sign-in form .header{
            font-size: 20px;
            color: #71add1 !important;
            text-align: center;
            margin-bottom: 30px;
        }
        .landing-page .sign-in form .myCustomFormOutline{
            padding: 10px 0;
            font-size: 15px !important;
        }
        .landing-page .sign-in form .myCustomButton{
            background-color: #71add1 !important;
            color: white !important;
            padding: 20px 0;
            width: 100%;
            box-shadow: 0 8px 9px -4px rgba(0,0,0,.15),0 4px 18px 0 rgba(0,0,0,.1);
            border: none;
            border-radius: 5px;
            font-size: 15px;
        }
        .landing-page .sign-in form .link-to-page{
            color: white;
            padding: 10px 20px;
            background-color: #71add1;
            margin-top: 30px;
        }

    </style>

</head>

<body>

    <div style="background: transparent;width: 100%;height: 100% !important;display: flex;align-items: center;">

	<div class="container-fluid landing-page">

        <div class="container landing-page-container">

            <div class="row">

                <div class="col-lg-6 col-md-12 landing-image-container">

                    <div class="landing-image">

                        <img src="assets/images/voting-image-admin.jpg" alt="">

                    </div>

                </div>

                <div class="col-lg-6 col-md-12 sign-in-container">

                    <div class="sign-in">

                        <form method="post" enctype="multipart/form-data">

                            <p class="header">Add an Administrator</p>

                            <!-- Email input -->

                            <div class="form-outline myCustomFormOutline mb-4">

                                <input type="text" name="username" class="form-control" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ; ?>" require/>

                                <label class="form-label">Username</label>

                            </div>

                            <!-- Password input -->

                            <div class="form-outline myCustomFormOutline mb-4">

                                <input type="text" name="password" class="form-control" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ; ?>" required/>

                                <label class="form-label">Password</label>

                            </div>

                            <div class="form-outline myCustomFormOutline mb-4">

                                <input type="file" name="photo" class="form-control" required>

                            </div>

                            <!-- Submit Form -->

                            <input type="submit" name="submit" class="myCustomButton" value="Add">

							<a href="admin.php" class="btn link-to-page"><- Go Back</a>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="assets/bootstrap/js/mdb.min.js"></script>

</body>

</html>