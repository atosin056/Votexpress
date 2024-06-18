<?php

session_start();

include "connect.php";

if (!isset($_SESSION["username"])) {
	
	header('location: index.php');

}

$select_from_elections = "SELECT * FROM `elections` WHERE `status`='active'";

$select_from_elections_query = mysqli_query($conn, $select_from_elections);

if (mysqli_num_rows($select_from_elections_query) > 0) {

	while ($row = mysqli_fetch_assoc($select_from_elections_query)) {
		
		$electionName = $row["electionName"];

		$_SESSION["election_name"] = $electionName;

	}

}

$select_from_elections1 = "SELECT * FROM `elections`";

$select_from_elections1_query = mysqli_query($conn, $select_from_elections1);

if (mysqli_num_rows($select_from_elections1_query) > 0) {

	while ($row = mysqli_fetch_assoc($select_from_elections1_query)) {
		
		$status = $row["status"];

		$_SESSION["status"] = $status;

	}

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

if ($_SESSION["status"] == "closed") {

?>

<div style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0, 0, 0, 0.5);z-index: 1000;" id="logout11" class="popup11">
	
	<div>
		
		<div style="display: flex;justify-content: center;align-items: center;height: 100% !important;opacity: 100% !important;">
			
			<div style="background: white;width: 80%;height: auto;padding-bottom: 30px;" id="box1">
				
				<div style="background: #3c8dbc;width: 100% !important;height: 50px;display: flex;justify-content: center;align-items: center !important;padding-top: 19px;">
					
					<marquee style="width: 70%;"><p style="color: white;text-transform: uppercase;">Election has been Closed.</p></marquee>



				</div>

				<div class="container">

					<div style="width: 100%;background: transparent;display: flex;justify-content: center;align-items: center;height: 250px;">

						<div>

							<div style="width: 100%;display: flex;justify-content: center;">

								<div style="width: 100px;height: 100px;background: transparent;"><img src="images/closed.png" style="width: 100% !important;height: 100% !important;"></div>

							</div>

							<br>

							<h4 style="text-align: center;">Election Has been closed by the Administrator.</h4>

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
							
							<img src="profile/<?php echo $_SESSION["profile"] ?>" style="border-radius: 2000px;width: 100% !important;height: 100% !important;">

						</div>

							<div>
							
								<div style="padding-left: 5px;font-weight: 600;padding-top: 10px;font-size: 14px;"><?php echo $_SESSION["username"] ?> (You)</div>

								<p style="padding-left: 5px;font-size: 13px;">User</p>

							</div>

					</div>

				</div>

				<!-- Reports Section -->

				<div style="width: 100% !important;height: 50px;background: #1a2226;margin-top: 20px;color: #4b646f;padding-left: 25px;display: flex;align-items: center;padding-top: 13px;text-transform: uppercase;font-weight: 300;">
					
					<p>Reports</p>

				</div>

				<a href="dashboard.php" style="text-decoration: none;color: inherit;">

					<div class="hover">
						
						<div style="display: flex;background: transparent;">

							<font>😎</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">My Dashboard</p>

						</div>

					</div>

				</a>

				<a href="logout.php" style="text-decoration: none;color: inherit;">

					<div class="hover red">
						
						<div style="display: flex;background: transparent;">

							<font class="red">🤝</font><p style="font-size: 14px;margin-left: 10px;margin-top: 1px;">Logout</p>

						</div>

					</div>

				</a>

				<!-- Settings Section -->

				<div style="width: 100% !important;height: 50px;background: #1a2226;margin-top: 20px;color: #4b646f;padding-left: 25px;display: flex;align-items: center;padding-top: 13px;text-transform: uppercase;font-weight: 300;">
					
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

				</a>

			</div>



			<div class="nav-bar" style="background: #E7E1E7;">
				
				<div class="navbar" style="display: flex;justify-content: center;align-items: center;">
					
					<div style="display: flex;justify-content: flex-end;width: 100% !important;padding-right: 20px;">
						
						<div style="background: red;width: 40px;height: 40px;border-radius: 10000px;margin-bottom: 30px;">
							
							<img src="profile/<?php echo $_SESSION["profile"]; ?>" style="width: 100% !important;height: 100% !important;border-radius: 200000px;">

						</div>

						<div>

							<div style="margin-top: 0px;margin-left: 5px;font-weight: 600;font-size: 12px;"><?php echo $_SESSION["username"] ?> (You)</div>

							<p style="padding-left: 5px;font-size: 11px;">User</p>

						</div>

					</div>

				</div>

				<div class="content" style="display: flex;justify-content: center;align-items: center;background: transparent;">
					
					<div class="container" style="padding-top: 20px;background: transparent;display: flex;align-items: center;height: 100% !important;padding-left: 28px;">

						<div style="width: 100% !important;">
						
							<h4 style="font-weight: 600;">Dashboard</h4>

							<div style="margin-top: 20px;">

								<div style="display: flex;justify-content: center;align-items: center;background: #3c8dbc;height: 50px;">
										
									<h5 style="color: white;font-weight: 300;font-family: poppins;font-size: 20px;padding-top: 3px;">Current Election 🎅: <?php echo $_SESSION["election_name"]; ?> 🎩</h5>

								</div>

								<div style="margin-top: 0px;background: white;width: 100% !important;height: 400px;">
									
									<div style="background: transparent;width: 100%;height: 100%;padding-left: 30px;padding-right: 30px;box-shadow: 1px 1px 20px grey;">
										
										<div style="display: flex;width: 100% !important;height: 100% !important;align-items: center;">
											
											<!-- Candidate Number 1 -->

											<?php

											$select = "SELECT * FROM `candidates` WHERE `status`='active'";

											$select_query = mysqli_query($conn,$select);

											if (mysqli_num_rows($select_query) > 0) {
												
												while ($row = mysqli_fetch_assoc($select_query)) {

													$id = $row["id"];
													
													$candidatename = $row["candidate_name"];

													$candidate_pic = $row["candidate_pic"];

													$no_of_votes = $row["no_of_votes"];


													$_SESSION["candidate_id"] = $id;

													$_SESSION["candidate_pic"] = $candidate_pic;

													$_SESSION["candidate_name"] = $candidatename;

													$_SESSION["no_of_votes"] = $no_of_votes;

												

											?>

											<div class="candidate" style="margin-left: 20px;">
												
												<div class="candidate-content">

													<div style="display: flex;justify-content: center;">
													
														<div style="background: blue;width: 120px;height: 120px;border-radius: 10000px;">
															
															<img src="candidates/<?php echo $_SESSION["candidate_pic"]; ?>" style="width: 100% !important;height: 100% !important;border-radius: 1000px !important;">

														</div>

													</div>

													<div style="margin-top: 25px;">
														
														<p style="font-size: 18px;font-family: poppins;font-weight: 500;line-height: 0px;text-align: center;"><?php echo $_SESSION["candidate_name"]; ?></p>

														<p style="text-align: center;background: transparent;">Candidate</p>

													</div>

													<?php

													$select_from_candidates = "SELECT * FROM `users` WHERE `status`='voted' AND `username`='".$_SESSION["username"]."'";

													$select_from_candidates_query = mysqli_query($conn,$select_from_candidates);

													if (mysqli_num_rows($select_from_candidates_query) > 0) {

										
													?>

													<div>
														
														<p>Thanks, Your vote counts!</p>

														<div style="display: flex;justify-content: center;">

															<div style="background: green;padding: 5px;width: auto;height: 40px;border-radius: 1000px;padding-left: 20px;padding-right: 20px;">
																
																<p style="text-align: center;padding-top: 3px;font-weight: 600;color: white;"><?php echo $_SESSION["no_of_votes"]; ?></p>

															</div>
														
														</div>

													</div>

													<?php

													}

													else{	

													?>

													<a href="vote.php?id=<?php echo $_SESSION["candidate_id"]; ?>" style="text-decoration: none;color: inherit;">

														<div class="vote-button" style="display: flex;justify-content: center;align-items: center;">
															
															<div style="display: flex;justify-content: center;align-items: center;">

																<div style="width: 25px;height: 25px;"><img src="images/icon.png" style="width: 100% !important;height: 100% !important;"></div>

																<p style="font-size: 15px;color: white;padding-top: 13px;padding-left: 4px;">Vote</p>

															</div>

														</div>

													</a>

													<?php

												}

													?>

												</div>

											</div>

											<?php

											}}

											?>
											
										</div>

									</div>
									
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

