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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/jquery.gritter/css/jquery.gritter.css" />

	<link rel="stylesheet" href="<?php echo base_url();?>fonts/font-awesome-4/css/font-awesome.min.css">>
	<!-- Custom styles for this template -->
	<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" />	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/jquery.datatables/bootstrap-adapter/css/datatables.css" />



</head>

<body>

	<!-- Fixed navbar -->
	<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">

			<div class="navbar-collapse collapse">
				<a class="navbar-brand" href="<?php echo base_url();?>HMS_Home"><span>House Maintenance System-HODOR</span></a>
				<?php	if(!empty($_SESSION["user_name"])) { ?>
				<ul class="nav navbar-nav navbar-right user-nav">
					<li class="dropdown profile_menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION["user_name"]; ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url();?>HMS_User"><i class="fa fa-cogs fa-fw"></i>&nbsp;My Account</a></li>
							
							<li class="divider"></li>
							<li><a href="<?php echo base_url();?>HMS_Logout"><i class="fa fa-power-off"></i>&nbsp;Sign Out</a></li>
						</ul>
					</li>
					</ul> <?php
				}
				else{
					?>
					<div class="nav navbar-nav navbar-right user-nav">
						Returning User?<a type="button" class="btn btn-danger btn-rad" href="<?php echo base_url();?>HMS_Login">Log In</a>  
					</div>
					<?php
				}
				?>
			</div><!--/.nav-collapse -->
		</div>
	</div>

	<div id="cl-wrapper" class="login-container">

		<div class="middle-signup">
			<div class="block-flat">
				<div class="sheader">							
					<h3 class="text-center">Add User!</h3>
				</div>
				<div class="content">
					<form action="<?php echo base_url();?>HMS_Registration/add_user" method="post" id="form" parsley-validate novalidate> 
						<div class="table-responsive">
							<table class="no-border">
								<tbody class="no-border-x no-border-y">
									<tr>
										<td><div class="form-group">
											<label>Full Name</label> <input type="text" name="name" parsley-trigger="change" required placeholder="Enter name" class="form-control">
										</div></td>
										<td>
											<div class="form-group">
												<label>Email address</label> <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email" class="form-control">
											</div></td>
										</tr>
										<tr>
											<td><div class="form-group"> 
												<label>Password</label> <input id="pass1" name="password" type="password" placeholder="Password" required class="form-control">
											</div></td>
											<td>
												<div class="form-group"> 
													<label>Repeat Password</label> <input parsley-equalto="#pass1" type="password" required placeholder="Password" class="form-control">
												</div></td>
											</tr>
											<tr>
												<td>
													<div class="form-group">
														<label>Type</label> 
														<select name="type" class="form-control" required>
															<option value="">Select Account Type</option>
															<option value="Owner">Owner</option>
															<option value="Accountant">Accountant</option>
														</select>
													</div></td>
													<td>
														<div class="form-group">
															<label>Houses (can select multiple)</label> 
															<select multiple name="house_type[]" class="form-control" required>
																<?php foreach ($house_IDs as $item){ ?>
																<option value="<?php echo $item["house_id"]; ?>"><?php echo $item["house_name"]; ?></option>
																<?php }?>
															</select>
														</div>
													</td>
												</tr>

												<tr>
													<td><div class="form-group">
														<label>Phone</label><input parsley-type="phone" name="phone" type="text" class="form-control" required placeholder="(XXX) XXXX XXX" />
													</div></td>
													<td>
														<div class="form-group">
															<label>Address</label>
															<textarea name="address" class="form-control" cols="21" rows="2"  placeholder="Bering Drive"></textarea>
														</div>
													</td>

												</tr>
												<tr> <td colspan="2">
													<div class="form-group">
														<div class="col-sm-offset-2 col-sm-10">
															<button type="submit" class="btn btn-primary">Add</button>
															<a type="cancel" class="btn btn-default" href="<?php echo base_url();?>HMS_User">Cancel</a>
														</div>
													</div>
												</td><td></td>
											</tr>
										</tbody>
									</table>
								</div>
								<?php if(isset($errorMessage)) {?>
								<span id="error" style="color: red;font-weight: bold;"><?php echo $errorMessage;?><span>
									<?php }?> 


								</form>
							</div>
						</div>
					</div> 
				</div>

				<div id="footer">
					<div class="footer_btm">
						All rights reserved. &copy; House Maintenance System 2018
					</div>
				</div>
				<script src="<?php echo base_url();?>js/jquery.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/jquery.sparkline/jquery.sparkline.min.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
				<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/behaviour/general.js"></script>
				<script src="<?php echo base_url();?>js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/jquery.nestable/jquery.nestable.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.switch/bootstrap-switch.min.js"></script>
				<script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
				<script src="<?php echo base_url();?>js/jquery.select2/select2.min.js" type="text/javascript"></script>
				<script src="<?php echo base_url();?>js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/jquery.gritter/js/jquery.gritter.min.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/jquery.datatables/jquery.datatables.min.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>


				<script type="text/javascript">
					$(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables();

    });
</script>
    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="<?php echo base_url();?>js/bootstrap/dist/js/bootstrap.min.js"></script>
    	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.flot/jquery.flot.js"></script>
    	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.flot/jquery.flot.pie.js"></script>
    	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.flot/jquery.flot.resize.js"></script>
    	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.flot/jquery.flot.labels.js"></script>
    </body>
    </html>
