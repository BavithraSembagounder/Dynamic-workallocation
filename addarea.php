<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("dwa",$con);
	if(isset($_POST['submit']))
	{
		$query=mysql_query("insert into areadetails(zone,area) VALUES ('".$_POST['zone']."','".$_POST['area']."')");
		header("Location:areatable.php");
	}
?>
<html>
	<head>
	</head>
	<body>
		<?php include "head.php"; ?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>Area Details</h1>        
			</section>
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<!-- left column -->
					<div class="col-xs-12">
						<!-- general form elements -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add New Area
								</h3>
							</div><!-- /.box-header -->
							<!-- form start -->
							<!--<form role="form">-->
							<div class="box-body">
								<form action="addarea.php" method="post">
									<table align="center">
										<tr>
											<td><label><h4>Zone Name:</h4></label></td>
											<td>
												<select name="zone" id="zone" required>
													<option> -Select Zone- </option>
													<?php
													$sql = mysql_query("select * from zonedetails");
													while($row = mysql_fetch_array($sql)) 
													{ ?>
														<option value='<?php echo $row['id']; ?>'><?php echo $row['zone'];?></option>
														<?php
													} ?>
												</select>
											</td>
										</tr> 
										<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Area Name: </h4></label></td><td><input type="text" name="area" id="area" required></td></tr>
										<br><tr><td><h4 align="center"><input type="submit" name="submit" value="Add"></h4></td></tr>
										<p>
											<font size="2" face="arial" color="red">
											</font>
										</p>
									</table>
								</form>
							</div>
						</div>      
						<!--</form>-->
					</div>
				</div>
			</section>	
		</div>
		<!-- /.box -->
		<?php include "navigation.php"; ?>
		<?php include "footer.php"; ?>
	</body>
</html>
