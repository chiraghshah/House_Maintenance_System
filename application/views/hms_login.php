<?php
if(!isset($_SESSION)) 
{
		session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/favicon.png">

	<title>House Maintenance System</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url();?>js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url();?>fonts/font-awesome-4/css/font-awesome.min.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="../../assets/js/html5shiv.js"></script>
	  <script src="../../assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" />	

</head>

<body class="texture">

<div id="cl-wrapper" class="login-container">

	<div class="middle-login">
		<div class="block-flat">
			<div class="header">							
				<h3 class="text-center"><img class="logo-img" src="<?php echo base_url();?>images/logo.png" alt="logo"/>House Maintenance System</h3>
			</div>
			<div>
				<form  parsley-validate novalidate style="margin-bottom: 0px !important;" class="form-horizontal" action="<?php echo base_url();?>HMS_Login/verify_login" method="post">
					<div class="content">
						<h4 class="title">Log In to House Maintenance System!</h4>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										 <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" placeholder="Password" name="password" id="password" class="form-control">
									</div>
								</div>
							</div>
							
			<?php if(isset($errorMessage)) {?>
			<span id="error" style="color: red;font-weight: bold;"><?php echo $errorMessage;?><span>
				<?php }?>
							
					</div>
					<div class="foot">
					<a class="btn btn-default" data-dismiss="modal" href="<?php echo base_url();?>HMS_Registration">Register Now</a>
					<button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button>
					</div>
				</form>
			</div>
		</div>
		<div class="text-center out-links"><a href="#">&copy; 2018 House Maintenance System</a></div>
	</div> 
	
</div>
<script src="<?php echo base_url();?>js/jquery.js"></script>
<script src="<?php echo base_url();?>js/jquery.parsley/parsley.js" type="text/javascript"></script>
</body>
</html>
