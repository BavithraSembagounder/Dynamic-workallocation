<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dwa",$con);
if(isset($_POST['submit']))
{
$query=mysql_query("insert into homedetails(customername,address,state,city,itemname,itemtype,roomname,measurments) VALUES ('".$_POST['customername']."','".$_POST['address']."','".$_POST['state']."','".$_POST['city']."','".$_POST['itemname']."','".$_POST['itemtype']."','".$_POST['roomname']."','".$_POST['measurments']."')");
header("Location:homedetailtable.php");
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
							<h5 class="box-title">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add Customer Home Details</h5>
						</div><!-- /.box-header -->
						<!-- form start -->
						<!--<form role="form">-->
						<div class="box-body">

<form action="addhomedetail.php" method="post">
<table align="center">
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Customer Name:</h4></label></td><td><input type="text" name="customername" id="customername" required></td><td><label><h4><font size="3" face="arial" color="red">*</font>Address:</h4></label></td><td><input type="text" name="address" id="address" required></td>   </tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Item Name:</h4></label></td><td><input type="text"name="itemname" id="itemname" required></td><td><label><h4><font size="3" face="arial" color="red">*</font>Item Type:</h4></label></td><td><input type="text" name="itemtype" id="itemtype" required></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Room Name:</h4></label></td><td><textarea name="roomname" id="roomname" required></textarea></td><td><label><h4><font size="3" face="arial" color="red">*</font>Measurments:</h4></label></td><td><input type="text" name="measurments" id="measurments" required></textarea></td></tr>
<tr><td><label><h4>Country Name:</h4></label></td>
<td><select name="country" id="country" >
<option> -Select Country- </option>
<?php
  $sql = mysql_query("select * from countrydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['country'];?></option>
  <?php } ?>
</select></td> 
<td><label><h4><font size="3" face="arial" color="red">*</font>State Name:</h4></label></td>
<td><select name="state" id="state" required>
<option> -Select State- </option>
<?php
  $sql = mysql_query("select * from statedetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['state'];?></option>
  <?php } ?>
</select></td>
</tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>City Name:</h4></label></td>
<td><select name="city" id="city" required>
<option> -Select City- </option>
<?php
  $sql = mysql_query("select * from citydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['city'];?></option>
  <?php } ?>
</select></td> <td><label><h4><font size="3" face="arial" color="red">*</font>Pincode:</h4></label></td><td><input type="text" name="mobileno" id="mobileno" required></td></tr>

<tr><td><h4 align="center"><input type="submit" name="submit" value="Add"></h4></td></tr>
<p>
<font size="2" face="arial" color="red">
<h4>*Mandatory Field<h4>
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
