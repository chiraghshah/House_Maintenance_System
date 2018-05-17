<?php include_once('hms_header.php');?>
<div class="container-fluid" id="pcont">
	<div class="page-head">
		<h2>Enter your Household Expenses here..</h2>			
	</div>		
	<div class="cl-mcont">

		<button type="button" class="btn btn-primary" onclick="addRow('dataTable')"><i class="fa fa-plus"></i> Add Expense</button>
		<button type="button" class="btn btn-danger" onclick="deleteRow('dataTable')"><i class="fa fa-times-circle"></i> Delete Last Expense</button>
		<div>

		</div>
		<div class="block-flat">
			<div class="header">							
				<h3>Select a house and then proceed to enter expenses </h3> <h3 id="house_name" style="font-weight: bold;color: red;"></h3>
			</div>

			<div class="block-flat no-padding" style="margin: auto;width: 60%;">
				<div class="content">
					<div class="table-responsive">
						<form action="<?php echo base_url();?>HMS_Payments/insert_expenses" method="post" parsley-validate novalidate>
							<table class="table no-border hover" id="dataTable">
								<thead class="no-border">
									<th style="width:15%;"><strong>House Name</strong></th>
									<th style="width:15%;"><strong>Expense Type</strong></th>
									<th style="width:15%;"><strong>Expense Amount</strong></th>
								</thead>
								<tbody class="no-border-x no-border-y">
									<tr>
										<td>
											<select id="house_select" name="house[]" class="form-control" required>
												<option value="">Select your house</option>
												<?php	foreach ($house_IDs as $item){?>
												<option value="<?php echo $item["house_id"];?>"><?php echo $item["house_name"];?> </option>
												<?php }?>
											</select>

										</td>
										<td>
											<select name="type[]" class="form-control" required>
												<option value="Utility Bills">Utility Bills</option>
												<option value="Maintenance">Maintenance</option>
												<option value="Property">Property</option>
												<option value="Other">Other</option>
											</select>
										</td>
										<td ><div class="input-group"><span class="input-group-addon">$</span><input type="text" parsley-type="number" class="form-control" name="txt[]" required/></div></td>

									</tr>
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
</div> 

<script>
	function showOutHouse(month) 
	{ 
		var sel = document.getElementById("house_select");
		document.getElementById('house_name').innerHTML=sel.options[sel.selectedIndex].text;
		document.getElementById('houseName').innerHTML=document.getElementById("house_select").value;
	}
</script>

<script language="javascript">
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