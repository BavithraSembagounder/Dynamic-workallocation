<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dwa",$con);
if(isset($_POST['submit']))
{
$query=mysql_query("insert into statedetails(country,state) VALUES ('".$_POST['country']."','".$_POST['state']."')");
header("Location:statetable.php");
}
?>
<html>
<head>
</head>
<?php include "head.php"; ?>
<body>
	<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>State Details</h1>        
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<!-- left column -->
				<div class="col-xs-12">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h5 class="box-title">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add New State</h5>
						</div><!-- /.box-header -->
						<!-- form start -->
						<!--<form role="form">-->
						<div class="box-body">

<form action="addstate.php" method="post">
<table align="center">
<tr><td><label><h4>Country Name:</h4></label></td>
<td><select name="country" id="country" required>
<option> -Select Country- </option>
<?php
  $sql = mysql_query("select * from countrydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['country'];?></option>
  <?php } ?>
</select></td></tr> 
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>State Name: </h4></label></td><td><input type="text" name="state" id="state"required></td></tr>
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
