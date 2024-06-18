<?php

include 'connect.php';

if (isset($_GET["id"])) {
	
	// header('location: admin.php');

}

?>

<html>

<head>

	<title>Votexpress | Logout | Are you sure you want to Delete this election</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<link href="https://fonts.googleapis.com/css2?family=Khula:wght@300;400;600;700;800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">

	<link rel="icon" type="image/png" href="images/icon.png">

</head>

<body>

<div style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0, 0, 0, 0.5);z-index: 1000;" id="logout11" class="popup11">
	
	<div>
		
		<div style="display: flex;justify-content: center;align-items: center;height: 100% !important;opacity: 100% !important;">
			
			<div style="background: white;width: 80%;height: auto;padding-bottom: 30px;" id="box1">
				
				<div style="background: #3c8dbc;width: 100% !important;height: 50px;display: flex;justify-content: center;align-items: center !important;padding-top: 19px;">
					
					<marquee style="width: 70%;"><p style="color: white;text-transform: uppercase;">Are you sure you want to Delete this election.</p></marquee>

				</div>

				<div class="container">

					<div style="width: 100%;background: transparent;display: flex;justify-content: center;align-items: center;height: 250px;">

						<div>

							<div style="width: 100%;display: flex;justify-content: center;">

								<div style="width: 100px;height: 100px;background: transparent;"><img src="images/closed.png" style="width: 100% !important;height: 100% !important;"></div>

							</div>

							<br>

							<h4 style="text-align: center;">Are you sure you want to logout</h4>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

</body>

</html>