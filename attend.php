<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("dwa",$con);

?>
<html>
	<head>
		<script>
			function getXMLHTTP()
			{
			var xmlhttp=false;
				try
				{
				xmlhttp= new XMLHttpRequest();
				}
				catch(e)
				{
					try
					{
					xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
					}

					catch(e)
					{
						try
						{
						xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
						}
						catch(e1)
						{
						xmlhttp=false;
						}
					}
				}
				return xmlhttp;
			}

			function attendance(val)
			{
				
				var strURL="attendance.php?att="+val; 
				
				var req = getXMLHTTP();
				if (req) 
				{
					req.onreadystatechange = function() 
					{
						if (req.readyState == 4) {
							// only if "OK" 
							if (req.status == 200) {	
								document.getElementById('detail').innerHTML=req.responseText;					
							} else {
								alert("There was a problem while using XMLHTTP:\n" + req.statusText);
							}
						}				
					}			
					req.open("GET", strURL, true);
					req.send(null);
				}	
			}
		</script>
	</head>
	<body>
		<?php include "head.php"; ?>
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					<!--<small>advanced tables</small>-->
				</h1>
			</section>
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title"></h3>
							</div><!-- /.box-header -->
							<div class="box-body">
								<center><h4>Select Employe Name In the drop down box to display the details of the employee</h4></center>
								<center>
									<select name="name" onchange="attendance(this.value)">
										<option value="">--Select Employee--</option>
										<?php
											$sql=mysql_query("select *  from plumbing_workers");
											while($row=mysql_fetch_assoc($sql))
											{
												?>
												<option value="<?php echo $row['emp_id']; ?>"><?php echo $row['name']; ?></option>
												<?php 
											} 
										?>
									</select>
								</center>
								<hr>
									<div id="detail"><center><h4>Employee Detail will displayed Here.....</h4></center></div>
								<hr>
							</div><!-- /.box-body -->
						</div><!-- /.box -->        
					</div><!-- /.col -->
				</div><!-- /.row -->
			</section><!-- /.content -->
		</div>
		<?php include "navigation.php"; ?>
		<?php include "footer.php"; ?>
	</body>
</html>