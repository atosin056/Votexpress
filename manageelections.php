<?php

session_start();

include "connect.php";

if (!isset($_SESSION["ad-username"])) {
	
	header('location: admin.php');

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

<!-- Dashboard -->

<div class="dashboard-holder" style="width: 100% !important;height: 100%;">

	<div>

		<div style="display: flex;height: 100% !important;">
			
			<div class="sidebar">
				
				<div style="width: 100% !important;height: 50px;background: #367fa9;display: flex;justify-content: center;align-items: center;">
					
					<h5 style="color: white;"><b>Vote</b>Xpress</h5>

				</div>

				<div style="width: 100% !important;height: 80px;background: transparent;display: flex;align-items: center;color: white;">
					
					<div style="display: flex;padding-left: 20px;">

						<div style="background: yellow;width: 50px;height: 50px;margin-top: 7px;border-radius: 50px;">
							
							<img src="images/Tosin.jpeg" style="border-radius: 2000px;width: 100% !important;height: 100% !important;">

						</div>

							<div>
							
								<div style="padding-left: 5px;font-weight: 600;padding-top: 10px;font-size: 14px;">Tosin (Agba)</div>

								<p style="padding-left: 5px;font-size: 13px;">Online</p>

							</div>

					</div>

				</div>

				<!-- Reports Section -->

				<div style="width: 100% !important;height: 50px;background: #1a2226;margin-top: 20px;color: #4b646f;padding-left: 25px;display: flex;align-items: center;padding-top: 13px;text-transform: uppercase;font-weight: 300;">
					
					<p>Reports</p>

				</div>

				<a href="admin.php" style="text-decoration: none;color: inherit;">

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

				<!-- Settings Section -->

				<!-- <div style="width: 100% !important;height: 50px;background: #1a2226;margin-top: 20px;color: #4b646f;padding-left: 25px;display: flex;align-items: center;padding-top: 13px;text-transform: uppercase;font-weight: 300;">
					
					<p>Settings</p>

				</div>

				<a href="changepassword.php" style="text-decoration: none;color: inherit;">

					<div class="hover">
						
						<div style="display: flex;background: transparent;">

							<font>🤔</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">Change Password</p>

						</div>

					</div>

				</a>

				<a href="changeusername.php" style="text-decoration: none;color: inherit;">

					<div class="hover">
						
						<div style="display: flex;background: transparent;">

							<font>🍔</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">Change Username</p>

						</div>

					</div>

				</a>

				<a href="updateprofile.php" style="text-decoration: none;color: inherit;">

					<div class="hover">
						
						<div style="display: flex;background: transparent;">

							<font>🍿</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">Update Profile</p>

						</div>

					</div>

				</a> -->

			</div>



			<div class="nav-bar" style="background: #E7E1E7;">
				
				<div class="navbar" style="display: flex;justify-content: center;align-items: center;">
					
					<div style="display: flex;justify-content: flex-end;width: 100% !important;padding-right: 20px;">
						
						<div style="background: red;width: 40px;height: 40px;border-radius: 10000px;margin-bottom: 30px;">
							
							<img src="images/Tosin.jpeg" style="width: 100% !important;height: 100% !important;border-radius: 200000px;">

						</div>

						<div>

							<div style="margin-top: 0px;margin-left: 5px;font-weight: 600;font-size: 12px;">Tosin (Agba)</div>

							<p style="padding-left: 5px;font-size: 11px;">Owner</p>

						</div>

					</div>

				</div>

				<div class="content" style="display: flex;justify-content: center;align-items: center;background: transparent;">
					
					<div class="container" style="padding-top: 60px;background: transparent;height: 100% !important;padding-left: 28px;">

						<div style="width: 100% !important;">
						
							<h4 style="font-weight: 600;">Close The Current Election.</h4>

						</div>

						<div class="Table" style="background: white;">
							
							<div style="display: flex;">
								
								<div class="head">Election Name</div>

							</div>

							<?php

							$select = "SELECT * FROM `elections` WHERE `status`='active'";

							$select_query = mysqli_query($conn, $select);

							if (mysqli_num_rows($select_query) > 0) {
								
								while ($row = mysqli_fetch_assoc($select_query)) {
									
									$electionName = $row["electionName"];

									$_SESSION["ele-Name"] = $electionName;


								


							?>

							<div style="display: flex;">
								
								<div class="body"><?php echo $_SESSION["ele-Name"]; ?></div>

								<div class="body" style="">
									
									<a href="updateelection.php?id=<?php echo $_SESSION["man-i"]; ?>" style="color: inherit;text-decoration: none;">
										
										<button class="delete-button">
											
											Close

										</button>

									</a>

								</div>

							</div>

							<?php

								}

							}	

							?>



						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

</body>

</html>

