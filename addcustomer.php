<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dwa",$con);
if(isset($_POST['submit']))
{
$query=mysql_query("insert into customerdetails(customername,email,mobileno,zone) VALUES ('".$_POST['customername']."','".$_POST['email']."','".$_POST['mobileno']."','".$_POST['zone']."')");
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
			<h1>Customer Details</h1>        
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
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add New Customer</h2>
						</div><!-- /.box-header -->
						<!-- form start -->
						<!--<form role="form">-->
						<div class="box-body">


<form action="addcustomer.php" method="post">
<table align="center">
<tr><td><label><h5><font size="3" face="arial" color="red">*</font>Customer Name:</h5></label></td><td><input type="text" name="customername" id="customername" required></td>   <td><label><h5>Pincode: </h5></label></td><td><input type="text" name="pincode" id="pincode"></td></tr>

<tr><td><label><h5>Email:</h5></label></td><td><input type="email" name="email" id="email" required></td><td><label><h5>Landline no:</h5></label></td><td><input type="text" name="landline" id="landline"></td></tr>
<tr><td><label><h5><font size="3" face="arial" color="red">*</font>Address 1:</h5></label></td><td><textarea rows="5" cols="25" name="addr1" id="addr1" required></textarea></td></tr>
<tr><td><label><h5><font size="3" face="arial" color="red">*</font>Mobileno 1:</h5></label></td><td><input type="text" name="mobileno" id="mobileno" required></td><td><label><h5>Mobileno 2:</h5></label></td><td><input type="text" name="alterno" id="alterno"></td></tr>
<tr><td><label><h5>Door No:</h5></label></td><td><input type="text" name="door" id="door"></td><td><label><h5>Street:</h5></label></td><td><input type="text" name="street" id="street"></td></tr>
<tr><td><label><h5><font size="3" face="arial" color="red">*</font>Landmark 1:</h5></label></td><td><input type="text" name="land1" id="land1" required></td><td><label><h5>Landmark 2:</h5></label></td><td><input type="text" name="land2" id="land2"></td></tr>
<tr><td><label><h5>Country Name:</h5></label></td>
<td><select name="country" id="country">
<option> -Select Country- </option>
<?php
  $sql = mysql_query("select * from countrydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['country'];?></option>
  <?php } ?>
</select></td> 
<td><label><h5>State Name:</h5></label></td>
<td><select name="state" id="state">
<option> -Select State- </option>
<?php
  $sql = mysql_query("select * from statedetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['state'];?></option>
  <?php } ?>
</select></td>
</tr>
<tr><td><label><h5>City Name:</h5></label></td>
<td><select name="city" id="city">
<option> -Select City- </option>
<?php
  $sql = mysql_query("select * from citydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['city'];?></option>
  <?php } ?>
</select></td> 
<td><label><h5>Role Name:</h5></label></td>
<td><select name="role" id="role">
<option> -Select Role- </option>
<?php
  $sql = mysql_query("select * from roledetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['role'];?></option>
  <?php } ?>
</select></td>
</tr>
<tr><td><label><h5><font size="3" face="arial" color="red">*</font>Zone Name</h5></label></td>
<td><select name="zone" id="zone" required>
<option> -Select Zone- </option>
<?php
  $sql = mysql_query("select * from zonedetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['zone'];?></option>
  <?php } ?>
</select></td> 
<td><label><h5><font size="3" face="arial" color="red">*</font>Area Name</h5></label></td>
<td><select name="area" id="area" required>
<option> -Select Area- </option>
<?php
  $sql = mysql_query("select * from areadetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['area'];?></option>
  <?php } ?>
</select></td></tr> 
<tr><td><h4 align="center"><input type="submit" name="submit" value="Add"></h4></td></tr>
<p>
<font size="2" face="arial" color="red">
<h5>*Mandatory Field<h5>
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
