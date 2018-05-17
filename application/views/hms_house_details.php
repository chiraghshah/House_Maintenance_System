<?php include_once('hms_header.php');?>
<div class="container-fluid" id="pcont">
	<div class="cl-mcont">
		<div class="row">
			<div class="col-md-12">
				<div class="house_img"></div>	
				<div style="text-align: center;">
					<h1>Manage your home</h1>		
				</div>
				<div class="col-lg-12 pull-left">
					<div class="block-flat">
						<div class="header">							
							<h2>
								A personal finance solution that is a digital hub of all the important information about your largest financial asset - your home.
							</h2>
						</div>
					</div>				
				</div>	
			</div>
		</div>
		<div class="block-flat">
			<div class="header">							
				<h3>Houses under profile : <?php echo $_SESSION["user_name"];?></h3>
				<a type="button" class="btn btn-warning" href="<?php echo base_url();?>HMS_house/register_new_house">Add New Houses</a>
			</div>
			<div class="block-flat no-padding" style="margin: auto;width: 90%;">
				<div class="content">
					<div class="table-responsive">
						<table class="table table-bordered" id="datatable">
							<thead>
								<tr>
									<th><strong>Name</strong></th>
									<th><strong>Location</strong></th>
									<th><strong>Type</strong></th>
									<th><strong>Area(Sq. Mts)</strong></th>
									<th><strong>Purchase Year</strong></th>
									<th><strong>Purchase Price</strong></th>
									<th><strong>Control Panel</strong></th>
								</tr>
							</thead>	
							<tbody>
								<?php		
								foreach ($house_IDs as $item){
									?>
									<tr>
										<td ><?php echo $item["house_name"]; ?></td>
										<td ><?php echo $item["house_location"]; ?></td>
										<td ><?php echo $item["house_type"]; ?></td>
										<td ><?php echo $item["house_area"]; ?></td>
										<td ><?php echo $item["house_reg_year"]; ?></td>
										<td ><?php echo "$".$item["house_purchase_amount"]; ?></td>
										<td><?php if($_SESSION["user_type"]!="Accountant") {?>  
											<a href="<?php echo base_url();?>HMS_House/edit_houses?house_id=<?php echo $item["house_id"] ?>"><i class="fa fa-pencil"></i></a> <a href="<?php echo base_url();?>HMS_House/delete_house?house_id=<?php echo $item["house_id"] ?>"><i class="fa fa-times-circle"></i></a>
											<?php } else {?>
											<p style="font-weight: bold;color: red;">Only "Owner/Admin" can modify house details!</p>
											<?php }?>
											<a href="<?php echo base_url();?>HMS_Payments/show_expenses?house_id=<?php echo $item["house_id"] ?>"><i class="fa fa-search-plus"></i>Show Expenses</a>
											<a href="<?php echo base_url();?>HMS_Payments/edit_expenses?house_id=<?php echo $item["house_id"] ?>"><i class="fa fa-pencil"></i> Edit Expenses</a>
										</td>


									</tr>
									<?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<?php include_once('hms_footer.php');?>

