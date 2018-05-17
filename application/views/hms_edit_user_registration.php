<?php include_once('hms_header.php');?>
<div id="cl-wrapper" class="login-container">

	<div class="middle-signup">
		<div class="block-flat">
			<div class="sheader">							
				<h3 class="text-center">Edit User!</h3>
			</div>
			<div class="content">

				<form action="<?php echo base_url();?>HMS_Registration/update_user" method="post" id="form" parsley-validate novalidate> 
					<?php		
					foreach ($userDetails as $item){
						?>
						<div class="form-group">
							<label>Full Name</label> <input type="text" name="name" parsley-trigger="change" required placeholder="Enter name" class="form-control" value="<?php echo $item["user_name"];?>">
						</div>
						<div class="form-group">
							<label>Email address</label> <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email" class="form-control" value="<?php echo $item["user_email"];?>">
						</div>
						<div class="form-group">
							<label>Type</label> <input type="text" name="type" parsley-trigger="change" required placeholder="Enter user type" class="form-control" value="<?php echo $item["user_type"];?>">
						</div>
						<div class="form-group"> 
							<label>Password</label> <input id="pass1" name="password" type="password" placeholder="Password" required class="form-control" value="<?php echo $item["user_password"];?>">
						</div> 
						<div class="form-group"> 
							<label>Repeat Password</label> <input parsley-equalto="#pass1" type="password" required placeholder="Password" class="form-control" value="<?php echo $item["user_password"];?>">
						</div> 
						<div class="form-group">
							<label>Phone</label><input parsley-type="phone" name="phone" type="text" class="form-control" required placeholder="(XXX) XXXX XXX" value="<?php echo $item["user_phone"];?>">
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" class="form-control" cols="21" rows="2"  placeholder="Bering Drive"><?php echo $item["user_address"];?></textarea>
						</div> 
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">Add</button>
								<a type="button" class="btn btn-default" href="<?php echo base_url();?>HMS_User">Cancel</a>
							</div>
						</div>
						<?php if(isset($errorMessage)) {?>
						<span id="error" style="color: red;font-weight: bold;"><?php echo $errorMessage;?></span>
							<?php }?>
							<?php }?>
						</form>
					</div>
				</div>
			</div> 
	</div>
			<?php include_once('hms_footer.php');?>