<?php

session_start();

include 'connect.php';

if (!isset($_SESSION["username"])) {
    
    header('location: index.php');

}

?>

<html lang="en">

<!-- This Application Was Created by Akinfenwa Oluwatosin Lloyd -->

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="icon" type="image/png" href="Fav1.gif" sizes="32x32"> -->

    <link rel="stylesheet" href="assets/bootstrap/css/mdb.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="css/main.css">

    <link rel="icon" type="image/png" href="images/icon.png">

    <title>VoteXpress - Electronic Voting Application | Akinfenwa OLuwatosin Lloyd</title>

    <style>
        .landing-page{
            display: flex;
            align-items: center;
            padding: 20px 0;
        }
        .landing-page .landing-image-container{
            margin-bottom: 30px;
        }
        .landing-page .landing-image{
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

<div style="width: 100%;height: 100%;background: transparent;display: flex;align-items: center;">

    <div class="container-fluid landing-page">

        <div class="container landing-page-container">

            <div class="row">

                <div class="col-lg-6 col-md-12 landing-image-container" style="margin-top: 20px;background: transparent;height: 100% !important;">

                    <div class="landing-image">

                        <img src="assets/images/voting-image.jpg" alt="">

                    </div>

                </div>

                <div class="col-lg-6 col-md-12 sign-in-container">

                    <div class="sign-in">

                        <form method="post">

                            <p class="header">Change your password</p>

                            <?php

                            if (isset($_POST["submit"])) {
                                
                                $new = $_POST["new"];

                                $update = "UPDATE `users` SET `password`='".md5($new)."' WHERE `username`='".$_SESSION["username"]."' AND `password`='".$_SESSION["password"]."'";

                                $update_query = mysqli_query($conn,$update);

                                if ($update_query) {

                                    session_destroy();
                                    
                                    header('location: index.php');

                                }

                                else{



                                }

                            }

                            ?>

                            <!-- Email input -->

                            <div class="form-outline myCustomFormOutline mb-4">

                                <input type="password" name="new" class="form-control" value="<?php echo isset($_POST['new']) ? $_POST['new'] : '' ; ?>" required>

                                <label class="form-label">New Password</label>

                            </div>

                            <!-- Submit Form -->

                            <input type="submit" name="submit" class="myCustomButton" value="Change Password">

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