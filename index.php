<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Ambulance Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this message?")){
				window.location.href ='delete_msg.php?id='+id;
			}
		}
	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
		<!-- End Main Nav -->
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Client Messages
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box" >
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Client Messages</h2>
						<!--<div class="right">
							<label>search messages</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>-->
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Message Content</th>
								<th>Time Send</th>
								<th>Location</th>
								<th>Contact_no</th>
								
								<th>Bikash_Account_no</th>
								<th>Status</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM message JOIN ambulance_payment ON message.client_id=ambulance_payment.client_id";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>

								<td><h3><a href="#"><?php echo $row['message'] ?></a></h3></td>

								<td><?php echo $row['time'] ?></td>
								<td><?php echo $row['Location'] ?></td>
								<td><?php echo $row['Contact_no'] ?></td>
								<td><?php echo $row['Bikash_Account_no'] ?></td>

								<td><a href="#"><?php echo $row['status'] ?></a></td>

								<td><a href="javascript:sureToApprove(<?php echo $row['msg_id'];?>)" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<h2><input type="submit" onclick="window.print()" value="Print Here" /></h2>
					
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			<!-- Sidebar 
			<div id="sidebar">
				
				
				<div class="box">
					
					
					<div class="box-head">
						<h2>Management</h2>
					</div>
					
					
					<div class="box-content">
						<a href="#" class="add-button"><span>Send Messages</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>select all</label></p>
						<p><a href="#">Delete Selected</a></p>
						
						
					</div>
				</div>
				
			</div>
			 End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- whats app chat start-->

    <style>
      .whatsapp_float{
        position: fixed;
        bottom: 40px;
        right: 20px;
      }
    </style>
    <div class="whatsapp_float">
      
        <a href="https://wa.me/+8801521581815" target="_blank"><img src="http://localhost/clinicare/Coverimg/whatsapp.png" width="50px" class="whatsapp_float_btn"></a>

    </div>

  <!-- whats app chat end-->

<!-- Footer -->
<footer style="background-color:; margin-left:450px; margin-top:20px; margin-bottom: 20px;">

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by CliniCare Team. Hotline: +880195960844.
		</div>
	</footer><!--  end footer  -->
<!-- End Footer -->
	
</body>
</html>