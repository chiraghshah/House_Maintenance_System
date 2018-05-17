<?php include_once('hms_header.php');?>
<div class="container-fluid" id="pcont">
	<div class="cl-mcont">
		<div class="block-flat">
			<div class="header">	
			<?php if($_SESSION["user_type"]=="Owner") {?>						
				<h3>Account Details for, <?php echo $_SESSION["user_name"];?></h3>
				<a type="button" class="btn btn-warning" href="<?php echo base_url();?>HMS_Registration/add">Add New User to this Account</a>
				<?php }else if ($_SESSION["user_type"]=="Accountant"){?>
				<h3>Account Details for, <?php echo $_SESSION["user_name"];?></h3>
			<?php }else {?>
			<h3>Hello Admin! Welcome to manage all the users of HODOR! </h3>
			<?php }?>
			</div>
			<div class="block-flat no-padding" >
				<div class="content">
					<div class="table-responsive">
						<table class="table table-bordered" id="datatable" >
							<thead>
								<tr>
									<th><strong>Sr. No.</strong></th>
									<th><strong>Name</strong></th>
									<th><strong>Type</strong></th>
									<th><strong>Email</strong></th>
									<th><strong>Address</strong></th>
									<th><strong>Phone</strong></th>
									<th><strong>Control Panel</strong></th>
								</tr>
							</thead>	
							<tbody>
								<?php		
								$count=1;
								foreach ($userDetails as $item){
									?>
									<tr>
										<td><?php echo $count;?></td>
										<td ><?php echo $item["user_name"]; ?></td>
										<td ><?php echo $item["user_type"]; ?></td>
										<td ><?php echo $item["user_email"]; ?></td>
										<td ><?php echo $item["user_address"]; ?></td>
										<td ><?php echo $item["user_phone"]; ?></td>
										<td><?php if($_SESSION["user_type"]=="Owner") {?> 
											<a href="<?php echo base_url();?>HMS_Registration/edit_user?user_id=<?php echo $item["user_id"] ?>"><i class="fa fa-pencil"></i></a>
											<?php if($item["user_type"] =="Accountant") {?>
											<a href="<?php echo base_url();?>HMS_Registration/delete_user?user_id=<?php echo $item["user_id"] ?>"><i class="fa fa-times-circle"></i></a>
											<?php }?>
											<?php } else if($_SESSION["user_type"]=="Accountant") {?>
											<p style="font-weight: bold;color: red;">Only "Owner/Admin" can modify your details!</p>
											<?php }?>
											<?php if($_SESSION["user_type"]=="Admin") {?> 
											<a href="<?php echo base_url();?>HMS_Registration/edit_user?user_id=<?php echo $item["user_id"]?>"><i class="fa fa-pencil"></i></a>
											<a href="<?php echo base_url();?>HMS_Registration/delete_user?user_id=<?php echo $item["user_id"]?>"><i class="fa fa-times-circle"></i></a>
											<?php }?>
											
										</td>
									</tr>
									<?php $count++; }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 

	<script type="text/javascript">
	$(document).ready(function(){
	  //initialize the javascript
	  App.init();
	  App.dataTables();
	});
	$( "table" ).each( function( index, el ) {
	    $( el ).dataTable();
	    });
	$('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
    $('.dataTables_length select').addClass('form-control'); 
	</script>
	<?php include_once('hms_footer.php');?> 
	
