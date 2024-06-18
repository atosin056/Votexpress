<?php

session_start();

include 'connect.php';

if (!isset($_SESSION["ad-username"])) {
	
	header('location: login.php');

}

$count = "SELECT * FROM `users`";

$count_query = mysqli_query($conn,$count);

if (mysqli_num_rows($count_query) > 0) {
	
	$rowcount = mysqli_num_rows($count_query);

	$_SESSION["rowcount"] = $rowcount;

}

$count_candidates = "SELECT * FROM `candidates` WHERE `status`='active'";

$count_querys = mysqli_query($conn,$count_candidates);

if (mysqli_num_rows($count_querys) >= 0) {
	
	$rowcountcandidates = mysqli_num_rows($count_querys);

	$_SESSION["rowcountcandidates"] = $rowcountcandidates;

}


$count_admin = "SELECT * FROM `administrators`";

$count_queryss = mysqli_query($conn,$count_admin);

if (mysqli_num_rows($count_queryss) >= 0) {
	
	$rowcountadmin = mysqli_num_rows($count_queryss);

	$_SESSION["rowcountadmin"] = $rowcountadmin;

}

?>

<html>

<head>

	<title>VoteXpress - Electronic Voting Application | Akinfenwa Oluwatosin Lloyd</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<link href="https://fonts.googleapis.com/css2?family=Khula:wght@300;400;600;700;800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">

	<link rel="icon" type="image/png" href="images/icon.png">

</head>

<body>



<?php

if (isset($_POST["proceed"])) {
	
	$electionName = $_POST["election"];

	$number = $_POST["number"];

	$_SESSION["electionName"] = $electionName;

	$_SESSION["number"] = $number;

	if ($_SESSION["electionName"] == $electionName) {
		

	



?>

<script>

    console.log("JavaScript is running.");

    document.addEventListener('DOMContentLoaded', function() {
    
        document.getElementById('logout').style.display = 'block';
    
        if (document.getElementById('logout').style.display == 'block') {
    
            console.log("Work");
    
        }
    
        // Trigger the bounce animation after a short delay
    
        setTimeout(function() {
    
            document.getElementById('box').classList.add('bounce');
    
        }, 100);
    
    }); // Added closing parenthesis for addEventListener

</script>

<?php

}}

?>

<script>
	
    console.log("JavaScript is running.");

    document.addEventListener('DOMContentLoaded', function() {
    
        document.getElementById('logout1').style.display = 'block';
    
        if (document.getElementById('logout1').style.display == 'block') {
    
            console.log("Work");
    
        }
    
        // Trigger the bounce animation after a short delay
    
        setTimeout(function() {
    
            document.getElementById('box1').classList.add('bounce1');
    
        }, 100);
    
    }); // Added closing parenthesis for addEventListener

</script>

<?php

if (isset($_GET["good"])) {
	

?>

<div style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0, 0, 0, 0.5);z-index: 1000;" id="logout1" class="popup1">
	
	<div>
		
		<div style="display: flex;justify-content: center;align-items: center;height: 100% !important;opacity: 100% !important;">
			
			<div style="background: white;width: 80%;height: auto;padding-bottom: 30px;" id="box1">
				
				<div style="background: #3c8dbc;width: 100% !important;height: 50px;display: flex;justify-content: center;align-items: center !important;padding-top: 19px;">
					
					<marquee style="width: 70%;"><p style="color: white;text-transform: uppercase;">Election has been Created !!👍🔊😎😁🎲🎧📱.</p></marquee>



				</div>

				<div class="container">

					<div style="width: 100%;background: transparent;display: flex;justify-content: center;align-items: center;height: 250px;">

						<div>

							<div style="width: 100%;display: flex;justify-content: center;">

								<div style="width: 100px;height: 100px;background: transparent;"><img src="images/image.png" style="width: 100% !important;height: 100% !important;"></div>

							</div>

							<br>

							<h4 style="text-align: center;">Election Created Successfully</h4>

							<div class="button-ok" style="width: 100%;display: flex;justify-content: center;">
								
								<a href="admin.php">

									<button style="width: 60px;height: 40px;border: none;background: #3c8dbc;color: white;box-shadow: 1px 1px 10px grey;">Ok</button>

								</a>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<?php

}

?>

<?php


if (isset($_GET["bad"])) {
	
	$error = $_GET["bad"];

	if ($error == "nicetry") {
	

?>

<div style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0, 0, 0, 0.5);z-index: 1000;" id="logout1" class="popup1">
	
	<div>

		<audio autoplay>
 			
 			 <source src="nope.mp3" type="audio/mpeg" style="display: none;">
 			
		</audio>

		
		<div style="display: flex;justify-content: center;align-items: center;height: 100% !important;opacity: 100% !important;">
			
			<div style="background: white;width: 80%;height: auto;padding-bottom: 30px;" id="box1">
				
				<div style="background: #3c8dbc;width: 100% !important;height: 50px;display: flex;justify-content: center;align-items: center !important;padding-top: 19px;">
					
					<marquee style="width: 70%;"><p style="color: white;text-transform: uppercase;">Please Close The Current Election First.</p></marquee>



				</div>

				<div class="container">

					<div style="width: 100%;background: transparent;display: flex;justify-content: center;align-items: center;height: 250px;">

						<div>

							<div style="width: 100%;display: flex;justify-content: center;">

								<div style="width: 100px;height: 100px;background: transparent;"><img src="images/nope.png" style="width: 100% !important;height: 100% !important;"></div>

							</div>

							<br>

							<h4 style="text-align: center;">Election Creation Failed</h4>

							<div class="button-ok" style="width: 100%;display: flex;justify-content: center;">
								
								<a href="admin.php">

									<button style="width: 80px;height: 40px;border: none;background: #3c8dbc;color: white;box-shadow: 1px 1px 10px grey;">Go Back</button>

								</a>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>


<?php

}}

?>

<div style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0, 0, 0, 0.5);z-index: 1000;" id="logout" class="popup">
	
	<div>
		
		<div style="display: flex;justify-content: center;align-items: center;height: 100% !important;opacity: 100% !important;">
			
			<div style="background: white;width: 80%;height: 80%;padding-bottom: 30px;overflow-y: auto;" id="box">
				
				<div style="background: #3c8dbc;width: 100% !important;height: 50px;display: flex;justify-content: center;align-items: center !important;padding-top: 19px;">
					
					<marquee style="width: 70%;"><p style="color: white;text-transform: uppercase;">Kindly Input the General Information of Contestants for the election!</p></marquee>



				</div>

				<div class="container">

				<form method="POST" enctype="multipart/form-data" action="create.php">

					<div class="form-group" style="padding-top: 20px;">
						
						<h5 style="text-transform: uppercase;font-weight: 600;">Candidate Info</h5>

					</div>

					<?php

					for ($i=0; $i < $_SESSION["number"]; $i++){

					?>
						
					<div class="form-group" style="padding-top: 10px;">
			
						<input type="text" name="election[]" class="form-control" placeholder="Please Input the name of the Candidate">

					</div>

					<div class="form-group" style="padding-top: 10px;">
			
						<input type="file" name="photo[]" class="form-control" placeholder="Please Upload a Picture of the Candidate">

					</div>

					<br>

					<?php

					}

					?>

					<!-- <div class="form-group" style="padding-top: 10px;">
			
						<input type="text" name="election" class="form-control" placeholder="Please Input the name of the Candidate">

					</div>

					<div class="form-group" style="padding-top: 10px;">
			
						<input type="file" class="form-control" placeholder="Please Upload a Picture of the Candidate">

					</div>

					<div class="form-group" style="margin-top: 20px;">
						
						<input type="submit" name="save" value="Save" class="form-control" style="background: #71add1 !important;width: 90px;display: flex;justify-content: center;border: none;">

					</div>					 -->

					<input type="submit" name="sub" class="sub">

				</form>

			</div>

			</div>

		</div>

	</div>

</div>

<!-- Dashboard -->

<div class="dashboard-holder" style="width: 100% !important;height: 100%;">

	<div>

		<div style="display: flex;height: 100% !important;">
			
			<div class="sidebar">
				
				<div style="width: 100% !important;height: 50px;background: #367fa9;display: flex;justify-content: center;align-items: center;z-index: -3000000 !important;">
					
					<h5 style="color: white;"><b>Vote</b>Xpress</h5>

				</div>

				<div style="width: 100% !important;height: 80px;background: transparent;display: flex;align-items: center;color: white;">
					
					<div style="display: flex;padding-left: 20px;">

						<div style="background: yellow;width: 50px;height: 50px;margin-top: 7px;border-radius: 50px;">
							
							<img src="admin/<?php echo $_SESSION["ad-profile"] ?>" style="border-radius: 2000px;width: 100% !important;height: 100% !important;">

						</div>

							<div>
							
								<div style="padding-left: 5px;font-weight: 600;padding-top: 10px;font-size: 14px;"><?php echo $_SESSION["ad-username"] ?> <?php if ($_SESSION["ad-username"] == "Tosin") { ?>(Agba)<?php }else{} ?></div>

								<p style="padding-left: 5px;font-size: 13px;">Online</p>

							</div>

					</div>

				</div>

				<!-- Reports Section -->

				<div style="width: 100% !important;height: 50px;background: #1a2226;margin-top: 20px;color: #4b646f;padding-left: 25px;display: flex;align-items: center;padding-top: 13px;text-transform: uppercase;font-weight: 300;">
					
					<p>Reports</p>

				</div>

				<a href="#" style="text-decoration: none;color: inherit;">

					<div class="hover">
						
						<div style="display: flex;background: transparent;">

							<font>😎</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">My Dashboard</p>

						</div>

					</div>

				</a>

				<a href="adlogout.php" style="text-decoration: none;color: inherit;">

					<div class="hover red">
						
						<div style="display: flex;background: transparent;">

							<font class="red">🤝</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">Logout</p>

						</div>

					</div>

				</a>

				<!-- Manage Section -->

				<div style="width: 100% !important;height: 50px;background: #1a2226;margin-top: 20px;color: #4b646f;padding-left: 25px;display: flex;align-items: center;padding-top: 13px;text-transform: uppercase;font-weight: 300;">
					
					<p>Manage</p>

				</div>

				<?php

				if ($_SESSION["ad-username"] == "Tosin") {
 

				?>

				<a href="manageadmin.php" style="text-decoration: none;color: inherit;">

					<div class="hover">
						
						<div style="display: flex;background: transparent;">

							<font>👀</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">Administrators</p>

						</div>

					</div>

				</a>

				<a href="manageusers.php" style="text-decoration: none;color: inherit;">

					<div class="hover">
						
						<div style="display: flex;background: transparent;">

							<font>👫</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">Users</p>

						</div>

					</div>

				</a>

				<?php

				}

				else{


				}

				?>

				<a href="manageelection.php" style="text-decoration: none;color: inherit;">

					<div class="hover">
						
						<div style="display: flex;background: transparent;">

							<font>🔊</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">Elections</p>

						</div>

					</div>

				</a>

				<a href="managecandidates.php" style="text-decoration: none;color: inherit;">

					<div class="hover">
						
						<div style="display: flex;background: transparent;">

							<font>👨</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">Candidates</p>

						</div>

					</div>

				</a>

				<!-- Settings Section -->

				<div style="width: 100% !important;height: 50px;background: #1a2226;margin-top: 20px;color: #4b646f;padding-left: 25px;display: flex;align-items: center;padding-top: 13px;text-transform: uppercase;font-weight: 300;">
					
					<p>Settings</p>

				</div>

				<a href="addadmin.php" style="text-decoration: none;color: inherit;">

					<div class="hover">
						
						<div style="display: flex;background: transparent;">

							<font>💁</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">Add Administrator</p>

						</div>

					</div>

				</a>

				<a href="adduser.php" style="text-decoration: none;color: inherit;">

					<div class="hover">
						
						<div style="display: flex;background: transparent;">

							<font>💁</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">Add User</p>

						</div>

					</div>

				</a>

				<a href="adchangepassword.php" style="text-decoration: none;color: inherit;">

					<div class="hover">
						
						<div style="display: flex;background: transparent;">

							<font>🤔</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">Change Password</p>

						</div>

					</div>

				</a>

				<a href="adchangeusername.php" style="text-decoration: none;color: inherit;">

					<div class="hover">
						
						<div style="display: flex;background: transparent;">

							<font>👔</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">Change Username</p>

						</div>

					</div>

				</a>

			</div>



			<div class="nav-bar">
				
				<div class="navbar" style="display: flex;justify-content: center;align-items: center;">
					
					<div style="display: flex;justify-content: flex-end;width: 100% !important;padding-right: 20px;">
						
						<div style="background: red;width: 40px;height: 40px;border-radius: 10000px;margin-bottom: 30px;">
							
							<img src="admin/<?php echo $_SESSION["ad-profile"] ?>" style="width: 100% !important;height: 100% !important;border-radius: 200000px;">

						</div>

						<div>

							<div style="margin-top: 0px;margin-left: 5px;font-weight: 600;font-size: 12px;"><?php echo $_SESSION["ad-username"]; ?> <?php if ($_SESSION["ad-username"] == "Tosin") {
								
							?>(Agba)<?php }else {}?></div>

							<p style="padding-left: 5px;font-size: 11px;"><?php if ($_SESSION["ad-username"] == "Tosin"){?> Owner <?php }else{ ?>Admin <?php } ?></p>

						</div>

					</div>

				</div>

				<div class="content">
					
					<div class="container" style="padding-top: 20px;background: transparent;height: 100% !important;padding-left: 28px;">
						
						<h4 style="font-weight: 600;">Dashboard</h4>

						<div style="margin-top: 20px;">

							<div class="row" style="width: 100%;justify-content: space-between;padding-left: 10px;">
							
								<div class="col-lg-3 col-sm-3 col-md-3 cards blue">

									<div>
									
										<h3><?php echo $_SESSION["rowcountcandidates"]; ?></h3>

										<p>No of Canditates</p>

									</div>

								</div>

								<div class="col-lg-3 col-sm-3 col-md-3 cards green">

									<div>
									
										<h3><?php echo $_SESSION["rowcount"]; ?></h3>

										<p>No of Users.</p>

									</div>

								</div>

								<div class="col-lg-3 col-sm-3 col-md-3 cards orange">

									<div>
									
										<h3><?php echo $_SESSION["rowcountadmin"]; ?></h3>

										<p>No of Administrators.</p>

									</div>

								</div>

							</div>

							<!-- End of Dashboard -->

							<!-- Create an election -->

							<div style="background: transparent;margin-top: 70px;">
								
								<div>

									<h4 style="font-weight: 600;">Create an Election</h4>

									<form method="POST" style="padding-top: 10px;" id="createForm">
										
										<div class="form-group">
											
						</html>
					<label>Name of Election</label>

											<input type="text" name="election" class="form-control" placeholder="Please Input the type of election e.g President" required>

										</div>

										<div class="form-group" style="padding-top: 5px;">
											
											<label>Number of Contestants</label>

											<input type="number" name="number" class="form-control" placeholder="Please Input the number of contestants for the election e.g 1" required>

										</div>

										<div class="form-group" style="padding-top: 10px;">
											
											<input type="submit" name="proceed" class="form-control" style="background: #71add1 !important;width: 90px;display: flex;justify-content: center;border: none;" value="Proceed" id="proceed">

										</div>

									</form>

								</div>	

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

</body>

</html>


