<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>House Maintenance System</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.png">
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url();?>js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/jquery.gritter/css/jquery.gritter.css" />

	<link rel="stylesheet" href="<?php echo base_url();?>fonts/font-awesome-4/css/font-awesome.min.css">>
	<!-- Custom styles for this template -->
	<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" />	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/jquery.datatables/bootstrap-adapter/css/datatables.css" />	


	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/jquery.nanoscroller/nanoscroller.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/jquery.easypiechart/jquery.easy-pie-chart.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/bootstrap.switch/bootstrap-switch.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/jquery.select2/select2.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/bootstrap.slider/css/slider.css" />
   
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

	
<div id="cl-wrapper">
		<div class="cl-sidebar">
			<div class="cl-toggle"><i class="fa fa-bars"></i></div>
			<div class="cl-navblock">
				<ul class="cl-vnavigation">
					<li><a href="<?php echo base_url();?>HMS_Home"><i class="fa fa-home"></i>Overview</a></li>
					<li><a href="<?php echo base_url();?>HMS_Buyer"><i class="fa fa-list-alt"></i>Buyer Features</a></li>
					<li><a href="<?php echo base_url();?>HMS_Seller"><i class="fa fa-list-alt"></i>Seller Features</a></li>
					<!-- Will show this feature only if user Logged In -->
					<?php if(!empty($_SESSION["user_name"])) { ?>
					<li><a href="<?php echo base_url();?>HMS_House"><i class="fa fa-table"></i>House Details</a></li>
					<li><a href="<?php echo base_url();?>HMS_Payments"><i class="fa fa-table"></i>Add Expenses</a></li>
					<li><a href="<?php echo base_url();?>HMS_Reports"><i class="fa fa-bar-chart-o"></i>Reports</a></li>
					<?php }?>
				</ul>
			</div>
		</div>