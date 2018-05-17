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

	<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" />	

</head>

<body class="texture">
<!-- Fixed navbar -->
  <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      
      <div class="navbar-collapse collapse">
     <a class="navbar-brand" href="#"><span>House Maintenance System</span></a>
      </div><!--/.nav-collapse -->
    </div>
  </div>

<div id="cl-wrapper" class="login-container">

	<div class="middle-signup">
		<div class="block-flat">
			<div class="sheader">							
				<h3 class="text-center">Enter your House Details..</h3>
			</div>
	<div class="content">

          <form action="<?php echo base_url();?>HMS_Registration/register_house" method="post" id="form" parsley-validate novalidate>
          <div class="form-group">
            	  <label>House Name</label> <input type="text" name="name" parsley-trigger="change" required placeholder="E.g. 404 Border" class="form-control">
              </div> 
              <div class="form-group">
            	  <label>House Address</label> <input type="text" name="location" parsley-trigger="change" required placeholder="E.g. 700 W Mitchell Circle" class="form-control">
              </div>
              <div class="form-group">
             	 <label>House Type</label> 
             	 <select name="type" class="form-control">
             	 <option value="1BHK">1 BHK</option>
             	 <option value="2BHK">2 BHK</option>
             	 <option value="3BHK">3 BHK</option>
             	 <option value="4BHK">4 BHK</option>
             	 <option value="Row House">Row House</option>
             	</select>
              </div>
              <div class="form-group">
                <label>House Area(Sq. ft.)</label>
                <input name="area" type="text" class="form-control" required placeholder="1600" />
                </div>
                 <div class="form-group">
             	 <label>House Registration Year</label> 
             	 <input parsley-type="dateIso" name="year" type="text" class="form-control parsley-validated" required="" placeholder="YYYY-MM-DD">
              </div>
              <div class="form-group">
             	 <label>House Purchase Amount($)</label> <input type="text" name="amount" parsley-trigger="change" required placeholder="1,500,000" class="form-control">
              </div>
              <div class="form-group">
	              <div class="col-sm-offset-2 col-sm-10">
	                <button type="submit" class="btn btn-primary">Submit</button>
	                <button type="cancel"class="btn btn-default">Cancel</button>
	              </div>
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
<script src="<?php echo base_url();?>js/jquery.parsley/parsley.js" type="text/javascript"></script>
</body>
</html>
