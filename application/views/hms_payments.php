<?php include_once('hms_header.php');?>

<div class="container-fluid" id="pcont">
	<div class="cl-mcont">
		<div class="row">
			<div class="col-md-12">
				<div class="payment_img"></div>	
				<div style="text-align: center;">
					<h1>Manage your Expenses</h1>		
				</div>
				<div class="col-lg-12 pull-left">
					<div class="block-flat">
						<div class="header">							
							<h2>
								Track and Document investments and stay organized by planning and documenting all of your remodel, interior design, and landscaping projects.
							</h2>
						</div>
					</div>				
				</div>	
			</div>
		</div>
		<div class="block-flat">
			<div class="header">							
				<h3>Houses under profile : <?php echo $_SESSION["user_name"];?></h3>
			</div>
			<div class="block-flat no-padding" style="margin: auto;width: 60%;">
				<div class="content">
					<div class="table-responsive">
						<table class="table table-bordered" id="datatable" >
							<thead>
								<tr>
									<th><strong>Name</strong></th>
									<th><strong>Control Panel</strong></th>
								</tr>
							</thead>	
							<tbody>
								<?php		
								foreach ($house_IDs as $item){
									?>
									<tr>
										<td ><?php echo $item["house_name"]; ?></td>
										<td> <a href="<?php echo base_url();?>HMS_Payments/show_expenses?house_id=<?php echo $item["house_id"] ?>"><i class="fa fa-search-plus"></i>Show Expenses</a>
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