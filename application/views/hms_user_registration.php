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

	<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" />	

</head>

<body class="texture">
<!-- Fixed navbar -->
  <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      
      <div class="navbar-collapse collapse">
     <a class="navbar-brand" href="<?php echo base_url();?>HMS_Home"><span>House Maintenance System-HODOR</span></a>
      </div><!--/.nav-collapse -->
    </div>
  </div>

<div id="cl-wrapper" class="login-container">

	<div class="middle-signup">
		<div class="block-flat">
			<div class="sheader">							
				<h3 class="text-center">Sign up!</h3>
				<center><h5>Thanks for choosing HMS-HODOR for your smart home.</h5></center>
			</div>
	<div class="content">

          <form action="<?php echo base_url();?>HMS_Registration/verify_user" method="post" id="form" parsley-validate novalidate> 
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
                <label>Phone</label><input parsley-type="phone" name="phone" type="text" class="form-control" required placeholder="(XXX) XXXX XXX" />
                </div></td>
              </tr>

            <tr>
              <td colspan="2">
               <div class="form-group">
                <label>Address</label>
                <textarea name="address" class="form-control" cols="21" rows="2"  placeholder="Bering Drive"></textarea>
                </div>
              </td>
              <td></td>
              </tr>
              <tr> <td colspan="2">
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Register</button>
                  <a type="cancel" type="button" class="btn btn-default" href="<?php echo base_url();?>HMS_Login">Cancel</a>
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
<script src="<?php echo base_url();?>js/jquery.parsley/parsley.js" type="text/javascript"></script>
</body>
</html>
