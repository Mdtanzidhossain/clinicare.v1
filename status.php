<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ambulance</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style type="text/css">
		.status{
			font-size: 20px;
		}
	</style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body style="background-color: #ffffff;">

	<section class="">
		<?php
			include 'header.php';
		?>


	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Your Booking Status</h2>
			<ul class="properties_list">
			<?php
						
						include 'includes/config.php';
						$sel = "SELECT * FROM patient WHERE email = '$_SESSION[email]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
						error_reporting(0);
			?>
				<li>
						<h2"><span style="font-size:25px; color: #FF0000">Booking Status:</span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['status'];error_reporting(0);?></span></h2>
				</li>
			</ul>
		</div>
	</section>	<!--  end listing section  -->


