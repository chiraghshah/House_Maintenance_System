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
<div class="block-flat no-padding" style="margin: auto;width: 60%;">
		<div class="content">
			<form action="<?php echo base_url();?>HMS_House/insert_new_house" method="post" id="form" parsley-validate novalidate>
				<div class="table-responsive">
					<table class="no-border">
						<tbody class="no-border-x no-border-y">
							<tr>
								<td>
									<div class="form-group">
										<label>House Name</label> <input type="text" name="name" parsley-trigger="change" required placeholder="E.g. 404 Border" class="form-control">
									</div> 
								</td>
								<td>
									<div class="form-group">
										<label>House Address</label> <input type="text" name="location" parsley-trigger="change" required placeholder="E.g. 700 W Mitchell Circle" class="form-control">
									</div>
								</td>
							</tr>
							<tr>
								<td>
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
								</td>
								<td>
									<div class="form-group">
										<label>House Area(Sq. ft.)</label>
										<input name="area" type="text" class="form-control" required placeholder="1600" />
									</div>
								</td>
							</tr>
							
							<tr>
								<td>
									<div class="form-group">
										<label>House Registration Year</label> 
										<input parsley-type="dateIso" name="year" type="text" class="form-control parsley-validated" required="" placeholder="YYYY-MM-DD">
									</div>
								</td>
								<td>
									<div class="form-group">
										<label>House Purchase Amount($)</label> <input type="text" name="amount" parsley-trigger="change" required placeholder="1,500,000" class="form-control">
									</div>
								</td>
							</tr>

							<tr>
								<td colspan="2"> 
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="cancel"class="btn btn-default">Cancel</button>
										</div>
									</div>
								</td>
								<td></td>
							</tr>
						</tbody>
					</table>
							<?php if(isset($errorMessage)) {?>
							<span id="error" style="color: red;font-weight: bold;"><?php echo $errorMessage;?></span>
							<?php }?>
				</div>
			</form>
		</div>
</div>




	</div>
</div> 

<?php include_once('hms_footer.php');?>

