<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("dwa",$con);
	if(isset($_POST['submit']))
	{
		$query=mysql_query("insert into attendance(name,location,in_time,out_time) VALUES ('".$_POST['name']."','".$_POST['location']."','".$_POST['in_time']."','".$_POST['out_time']."')");
		//echo"Submittedted successfully";
	}

?>
<html>
	<head>
		<link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.css">
    </head>
	<body>
		<?php include "head.php"; ?>
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<!--<small>advanced tables</small>
				</h1>
				<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">Tables</a></li>-->
				<h1><font color="0033CC" font style="Comic Sans MS">Attendance</font></h1>
				<!--<li class="active">Care Takers</li>-->
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
								<table align="center">
									<form name="attendance" action="att1.php" method="post" onSubmit="return check(this)">
										<div>
											<!--<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Emp Id</h4></label></td><td><input type="text" size="35px" name="emp_id" id="emp_id" required></td></tr>-->
											<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Name</h4></label></td><td><input type="text" size="35px" name="name" id="name" required></td></tr>
											<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Location</h4></label></td><td><input type="text" size="35px" name="location" id="location" required></td></tr>
											<tr><td><label><h4><font size="3" face="arial" color="red">*</font>In time</h4></label></td><td><input type="text" size="35px" name="in_time" id="in_time" required></td></tr>
											<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Out time</h4></label></td><td><input type="text" size="35px" name="out_time" id="out_time" required></td></tr>
											<!--<div class="input-group date" data-provide="timepicker" style="width:70%">
											<input type="text" class="form-control" id="app" required>
											<div class="input-group-addon">
											<i class="fa fa-timer"></i>
											</div>
											</div></tr></td>
											<script src="plugins/timepicker/bootstrap-timepicker"></script>-->
											<tr><td><h4><center><input type="submit" name="submit" value="Submit"></h4></center></td>
											<td><h4><center><input type="reset" name="reset" value="Reset"></h4></center></td></tr>
										</div>
									</form>
								</table>
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