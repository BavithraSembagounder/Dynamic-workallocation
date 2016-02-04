<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("dwa",$con);
?>
<html>
	<head>
	</head>
	<body>
		<?php include"head.php";?>
		<!--<table border="1" align="center" width="50%">
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<!--<small>advanced tables</small>
				</h1>
				<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">Tables</a></li>-->
				<li class="active">Carpentory Workers</li>
				</ol>
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
								<table id="example2" class="table table-bordered table-hover">
									<!--<thead>-->
									<tr>
										<td bgcolor="66CCFF"><b>Employee Id</b></td>
										<td bgcolor="66CCFF"><b>Name</b></td>
										<td bgcolor="66CCFF"><b>Per hour pay</b></td>
										<td bgcolor="66CCFF"><b>Mobile No</b></td>
									</tr>
									<?php
										$query=mysql_query("select * from carpenters");
										while($row=mysql_fetch_assoc($query))
										{
											?>
											<tr>
												<td><?php echo $row['emp_id']; ?></td>
												<td><?php echo $row['name']; ?></td>
												<td><?php echo $row['per_hour_pay']; ?></td>
												<td><?php echo $row['mob_no']; ?></td>
											</tr>
									<?php } ?>
								</table>
								<!--</thead>-->
								<tbody>
								</tbody>
							</div><!-- /.box-body -->
						</div><!-- /.box -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</section><!-- /.content -->
      </div>
		<tr></tr>
		<?php include"navigation.php";?>
		<?php include"footer.php";?>
	</body>
</html>