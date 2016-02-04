<?php
  $con=mysql_connect("localhost","root","");
  mysql_select_db("dwa",$con);
	if(isset($_POST['submit']))
	{
		$query=mysql_query("insert into countrydetails(country) VALUES ('".$_POST['country']."')");
		header("Location:countrytable.php");
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
				<h1>Country Details</h1>        
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<!-- left column -->
					<div class="col-xs-12">
						<!-- general form elements -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h2 class="box-title">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add New Country</h2>
							</div><!-- /.box-header -->
							<!-- form start -->
							<!--<form role="form">-->
							<div class="box-body">
								<form action="addcountry.php" method="post">
									<table align="center">
										<div>
											<tr><td><h4 align="center"><label><font size="3" face="arial" color="red">*</font>Country Name:</label><input type="text" name="country" id="country" required></h4>
											</td></tr>
											<tr>
											<br/><td colspan="2"><h4 align="center"><input type="submit" name="submit"  value="Add"></h4></td>
											</tr>
										</div>
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