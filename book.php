<html>
<head>
</head>
<body>
<?php include "head.php"; ?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>New Booking</h1>        
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<!-- left column -->
				<div class="col-xs-12">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h5 class="box-title"></h5>
						</div><!-- /.box-header -->
						<!-- form start -->
						<!--<form role="form">-->
						<div class="box-body">
	<form name="register" action="book.php" method="post">
<table>
<div>
<tr><h3 align="center">Add New Booking</h3></tr></br></br>
<tr><td><h5 align="center"><label>Contact Number:  <input type="text" name="contact" id="contact">  (or)    Unique Number:<input type="text" name="unique" id="unique"></h5>  
<tr><td colspan="2"><h4 align="center"><input type="submit" name="submit"  value="search" onClick="check()"></h4></td></tr>
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