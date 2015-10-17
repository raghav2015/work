<?php
include('db/connect.php');
if(isset($_SESSION['visitor_id']))
{
header('location:loginSuccess.php');
}
?>

<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Index Page</title>

		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="css/customForm.css">
		<link rel="stylesheet" type="text/css" href="css/loginStyle.css">
		<link href="css/stylish-portfolio.css" rel="stylesheet">
		<link href="css/lightBoxStyle.css" rel="stylesheet">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
		
		<!-- Media Query-->
		<style>
			@media only screen and (max-width: 360px) {
			.view {
			left: 0;
			margin: 0 auto;
			right: 0;
			width: 85%;
			}
			}
		</style>
	</head>
	<body>
		<!-- Header -->
		<header id="top"class="header">
			<div class="text-vertical-center">
				<h1>Fun'N'Ride Travels</h1>
				<h3>Travel with Joy &amp; Happiness</h3>
				<br>
				<a id="modal_trigger" href="#modal" class="btn btn-dark btn-lg">Sign In</a>
				<div id="modal" class="popupContainer" style="display:none;">
					<header class="popupHeader" style="background:#3a5795; color:white;">
						<span class="header_title">Login</span>
						<span class="modal_close" style="background:#3a5795;color:white;"><i class="fa fa-times"></i></span>
					</header>
					<div class="popupBody">
						<form class="form-horizontal" action="checkLogin.php" method="post" enctype="multipart/form-data">
							<div class="control-group">
								<label for="email">Email</label>
								<div class="controls">
									<input type="text" name="mail" id="mail" placeholder="Email">
								</div>
							</div>
							<div class="control-group">
								<label for="password">Password</label>
								<div class="controls">
									<input type="password" name="pswd" id="pswd" placeholder="Password">
								</div>
							</div>
							<button type="submit" name="submit" class="btn btn-dark" style="margin-top: 10px;">Sign in</button>
						</form>
					</div>
				</div>
				<span><a href="#" class="btn btn-dark btn-lg" onclick = "createlightbox()">Sign Up</a></span>
				<div class="show_form view"  id="light">
					<!--head section begins-->
					<a href = "javascript:void(0)" onclick = "closelightbox()" style="float:right">
						<img src="images/icon_cancel.gif" alt="" />
					</a>
				<div class="row">	
					<div class="col-lg-12 col-md-12 col-xs-12">	
						<div class="form-top">
							<div class="form-top-left">
								<h3>Sign Up</h3>
							</div>
							<div class="form-top-right">
								<img src="images/pencil.png" style="height:50px;width:50px"/>
							</div>
						</div>
						<!-- head section ends-->
						<!-- modal body begins-->
						<div class="form-section">
							<form class="registration-form" method="post" action="insert.php" role="form" name="registrationForm" onsubmit="return validateForm()">
								<div class="form-group">
									<table>
										
										<tr>
											<td><label class="control-label" for="firstName">First Name</label></td>
											<td>&nbsp;</td><td>&nbsp;</td>
											<td><input type="text" class="form-control" name="fname" placeholder="First Name.. ";></td>
										</tr>
									</table>
								</div>
									<div class="form-group">
										<table>
											<tr>
												<td><label class="control-label" for="lastName">Last Name</label></td>
												<td>&nbsp;</td><td>&nbsp;</td>
												<td><input type="text" class="form-control" name="lname" placeholder="Last Name..";></td>
											</tr>
										</table>	
									</div>
									<div class="form-group">
										<table>
											<tr>
												<td><label class="control-label" for="contact">Contact</label></td>
												<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
												<td><input type="text" class="form-control" name="contact" placeholder="Best Number to Reach You.." onkeypress="return isNumber(event)";></td>
											</tr>
										</table>
									</div>
									<div class="form-group">
										<table>
											<tr>
												<td><label class="control-label" for="email">E-mail</label></td>
												<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
												<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
												<td><input type="text" class="form-control" name="email" placeholder="Provide your email..";></td>
											</tr>
										</table>
									</div>
									<div class ="form-group">
										<table>
											<tr>
												<td><label class="control-label" for ="password"> Password </label></td>
												<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
												<td><input type="password" class="form-control" name="password"  id="password" placeholder="Enter Password.."></td>
											</tr>
										</table>
									</div>
									<div class ="form-group">
										<table>
											<tr>
												<td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
												<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
												<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
												<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
												</td>
												<td><input type="submit" name="submit" class="btn btn-info" value="Submit"></td>
											</tr>
										</table>
									</div>
							</form>
						</div>
					</div>
				</div>
						<!--modal body ends-->
				</div>
				
				<div id="fade1" class="black_overlay"></div><br>
				<a href="fbLogin.php" class="social_box fb">
							<span class="icon"><i class="fa fa-facebook"></i></span>
							<span class="icon_title">Log In with Facebook</span>
				</a>
			</div>
		</header>
		<!-- Footer -->
		
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 text-center">
						<h4><strong>Fun'N'Ride Travels</strong>
						</h4>
						<p>Lawrence Road<br>Amritsar, Punjab 143001</p>
						<ul class="list-unstyled">
							<li><i class="fa fa-phone fa-fw"></i> (91)9988593337</li>
							<li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">ragsharma17@gmail.com</a>
							</li>
						</ul>
						<br>
						<ul class="list-inline">
							<li>
								<a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
							</li>
						</ul>
						<hr class="small">
						<p class="text-muted">Copyright &copy; Fun'N'Ride Travels 2015</p>
					</div>
				</div>
			</div>
		
		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<!-- Validation Script-->
		<script type="text/javascript" src="js/validationScript.js"></script>
		<!-- Lightbox custom script-->
		<script type="text/javascript" language="javascript">
	
			$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });
			function createlightbox()
			{
				document.getElementById('light').style.display='block';
				document.getElementById('fade1').style.display='block'
				
			}
			function closelightbox()
			{
				document.getElementById('light').style.display='none';
				document.getElementById('fade1').style.display='none'
			}
		</script>	
	</body>
</html>