<?php
include('db/connect.php');

$sql=mysql_query('select * from visitors order by visitor_id DESC ');
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Thank You - Successful Submission</title>

		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/customForm.css">
		<link rel="stylesheet" type="text/css" href="css/loginStyle.css">
		
		<!-- Custom CSS -->
		<link href="css/stylish-portfolio.css" rel="stylesheet">
		<link href="css/lightBoxStyle.css" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		
	</head>
	<body>
		<!-- Header -->
		<header id="top"class="header">
			<div class="text-vertical-center">
				<h1>Thank You - Information Submitted Successfully</h1>
				<h3><a id="modal_trigger" href="#modal" class="btn btn-dark btn-lg">Check Your Submitted Details</a></h3>
			<div id="modal" class="popupContainer" style="display:none;">
				<div class="popupBody" style="border:2px solid grey; background-color:#89c2d;">
					<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						<span class="modal_close" style="float:right; cursor:pointer;"><i class="fa fa-times"></i></span>
						<table>
							<?php while($res=mysql_fetch_array($sql))
							{
							?>
							<tr>
								<td><label for="first name">First Name ::</label></td><td>&nbsp;</td><td>&nbsp;</td>
								<td><label for=""><?php echo $res['firstname'];?></label></td>
							</tr>
							<tr>
								<td><label for="last name">Last Name ::</label></td><td>&nbsp;</td><td>&nbsp;</td>
								<td><label><?php echo $res['lastname'];?></label></td>
							</tr>
							<tr>
								<td><label for="contact">Contact ::</label></td><td>&nbsp;</td><td>&nbsp;</td>
								<td><label><?php echo $res['contact'];?></label></td>
							</tr>
							<tr>
								<td><label for="email">Email ::</label></td><td>&nbsp;</td><td>&nbsp;</td>
								<td><label><?php echo $res['email'];?></label></td>
							</tr>
							<?php } ?>
						</table>
					</form>
				</div>
			</div>
		</header>
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
		<script type="text/javascript" language="javascript">
			$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });
			function viewInfo()
			{
				document.getElementById('info').style.display='block';
				document.getElementById('fade1').style.display='block'
				
			}
			function closeInfo()
			{
				document.getElementById('info').style.display='none';
				document.getElementById('fade1').style.display='none'
			}
			
		</script>	
	</body>
</html>