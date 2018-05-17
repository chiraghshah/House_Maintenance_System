<?php include_once('hms_header.php');?>

<div class="container-fluid" id="pcont">
	<div class="page-head">
		<h2>Update your Household Expenses here..</h2>			
	</div>		
	<div class="cl-mcont">
		<div class="header">

<?php try{ 
	$houseId=intval($house_IDs[0]["house_id"]);
	$houseName=$house_IDs[0]["house_name"];
	}catch(Exception $e){
		$houseId=0;
		$houseName="";
	}
	?>		
<h3><b>  House:</b> <?php echo $houseName;?></h3>
				</div>
			<div class="block-flat no-padding" style="margin: auto;width: 60%;">
				<div class="content">
					<div class="table-responsive">
						<?php if($houseId!=0){?>
						<form action="<?php echo base_url();?>HMS_Payments/update_expenses?house_id=<?php echo $house_IDs[0]["house_id"] ?>" method="post" parsley-validate novalidate>
							<?php } else {?>
							<form action="<?php echo base_url();?>HMS_Payments/update_expenses" method="post" parsley-validate novalidate>
							<?php }?>
							<table class="table no-border hover">
								<thead class="no-border">
									<th style="width:15%;"><strong>Expense Type</strong></th>
									<th style="width:15%;" colspan="2"><strong>Expense Amount</strong></th>
									<th style="width:15%;"><strong>Control Panel</strong></th>
								</thead>
								<tbody class="no-border-x no-border-y">
									<?php foreach ($house_expenses as $item){ ?>
									<tr>
										<td>
											<select name="type[]" class="form-control" required>
												<option <?php if($item["expense_type"] == 'Utility Bills') echo 'selected';?> value="Utility Bills">Utility Bills</option>
												<option <?php if($item["expense_type"] == 'Maintenance') echo 'selected';?> value="Maintenance">Maintenance</option>
												<option <?php if($item["expense_type"] == 'Property') echo 'selected';?> value="Property">Property</option>
												<option <?php if($item["expense_type"] == 'Other') echo 'selected';?> value="Other">Other</option>
											</select>
										</td>
										<td ><div class="input-group"><span class="input-group-addon">$</span><input type="text" class="form-control" name="txt[]" value="<?php echo $item["expense_amount"]; ?>" required></div></td>
										<td colspan="2"><a href="<?php echo base_url();?>HMS_Payments/delete_expenses?expense_id=<?php echo $item["expense_id"] ?>&house_id=<?php echo $houseId ?>"><i class="fa fa-times-circle"></i>Delete</a></td>
										<td style="display: none;"><input type="text" name="expense_id[]" value="<?php echo $item["expense_id"]; ?>" required></td>
									</tr>
									<?php }?>
								</tbody>
							</table>
							<button type="submit" class="btn btn-success">Submit Expenses</button>		
							<button type="button" class="btn btn-info">Cancel</button>
						</form>
					</div>
				</div>
			</div>
	</div>
</div> 

<script>
	function showOutHouse(month) 
	{ 
		var sel = document.getElementById("house_select");
		document.getElementById('house_name').innerHTML=sel.options[sel.selectedIndex].text;
		document.getElementById('houseName').innerHTML=document.getElementById("house_select").value;
	}
</script>
<script>
	function addRow(tableID) {

		var table = document.getElementById(tableID);

		var rowCount = table.rows.length;
		var row = table.insertRow(rowCount);

		var colCount = table.rows[0].cells.length;
			//alert("rowcount:"+rowCount +"colCount"+colCount);
			for(var i=0; i<colCount; i++) {

				var newcell	= row.insertCell(i);

				newcell.innerHTML = table.rows[1].cells[i].innerHTML;
				//alert(newcell.childNodes);
				switch(newcell.childNodes[0].type) {
					case "text":
					newcell.childNodes[0].value = "";
					break;
					case "select-one":
					newcell.childNodes[0].selectedIndex = 0;
					break;
				}
			}
		}

		function deleteRow(tableID) {
			try {
				var table = document.getElementById(tableID);
				var rowCount = table.rows.length;
				if(rowCount<=2)
				{
					alert("Cannot delete all the rows.");
				}
				else
				{
					table.deleteRow(rowCount-1);
				}
			}catch(e) {
				alert(e);
			}
		}

	</script>
	<?php include_once('hms_footer.php');?>