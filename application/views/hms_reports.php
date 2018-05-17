<?php include_once('hms_header.php');?>
		<div class="container-fluid" id="pcont">
			<div class="page-head">
				<h2> Hodor provies you Live Charts and many more!</h2>
			</div>		
		<div class="cl-mcont">
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="block-flat">
						<div class="header">
							<h3>Line Chart</h3>
						</div>
						<div class="content">
							<div id="site_statistics" style="height: 180px; padding: 0px; position: relative;"></div>
						</div>
					</div>
				
					<div class="block-flat">
						<div class="header">
							<h3>Pie Chart</h3>
						</div>
						<div class="content overflow-hidden">
							<div id="piec" style="height: 300px; padding: 0px; position: relative;">
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-6">

					<div class="block-flat">
						<div class="header">							
							<h3>Bar Chart</h3>
						</div>
						<div class="content">
							<div id="site_statistics2" style="height: 180px; padding: 0px; position: relative;"></div>							
						</div>
					</div>

					<div class="block-flat">
						<div class="header">							
							<h3>Full-Width Chart</h3>
						</div>
						<div class="content full-width">
							<div id="chart3-legend" class="legend-container"></div>
							<div id="chart3" style="height: 260px;"></div>							
						</div>
					</div>
				</div>			
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<h3>Live Chart</h3>
						</div>
						<div class="content">
							<div id="chart4" style="height: 230px; padding: 0px; position: relative;"></div>							
						</div>
					</div>				
				</div>
			</div>
		 </div>
		</div> 
 <?php include_once('hms_footer.php');?>