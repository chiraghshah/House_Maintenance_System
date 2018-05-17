<?php include_once('hms_header.php');?>

<div class="container-fluid" id="pcont">
	<div class="cl-mcont">
<div class="stats_bar">

				<div class="butpro butstyle">
					<div class="sub"><h2>HOUSES REGISTERED</h2><span>$951,611</span></div>
					<div class="stat"><span class="up"> 13,5%</span></div>
				</div>
				<div class="butpro butstyle">
					<div class="sub"><h2>OVERALL EXPENSES</h2><span>125</span></div>
					<div class="stat"><span class="down"> 20,7%</span></div>
				</div>	
				<div class="butpro butstyle">
					<div class="sub"><h2>TOTAL USERS</h2><span>18</span></div>
					<div class="stat"><span class="equal"> 0%</span></div>
				</div>	

			</div>
<?php try{ 
	$houseName=$house_IDs[0]["house_name"];
	}catch(Exception $e){
		$houseName="";
	}
	?>
				<div class="block-flat no-padding" style="margin: auto;width: 60%;">
					<div class="block">
						<div class="header">
							<h2>Expenses for House<span class="pull-right"><?php echo $houseName?></span></h2>
							<h3>Location: <i><?php echo $house_IDs[0]["house_location"]?></i></h3>
						</div>
						<div class="content no-padding ">
							<ul class="items">
							<?php $count=1;
								$itemTotal=0;
							foreach ($house_expenses as $item){ ?>
								<li>
									<b><?php echo $count; ?>. </b> <i class="fa fa-file-text"></i><?php echo $item["expense_type"]; ?> <span class="pull-right value">$<?php echo floatval($item["expense_amount"]); ?></span>
								</li>
								<?php $itemTotal +=floatval(($item["expense_amount"])); ?>
								<?php $count++;}?>
							</ul>
						</div>
							<div class="total-data bg-blue" >
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<h2>Total <b class="caret"></b> <span class="pull-right">$<?php echo number_format($itemTotal);?></span></h2>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Print receipt</a></li>
									<li><a href="#">Send invoice to...</a></li>
									<li><a href="#">Payment</a></li>
								</ul>
							</div>
					</div>
				</div>	
		</div>
	</div> 
	<?php include_once('hms_footer.php');?>	 