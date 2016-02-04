<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dwa",$con);
if(isset($_POST['submit']))
{
$query=mysql_query("insert into userdetails(firstname,lastname,mobileno,zone,role) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['mobileno']."','".$_POST['zone']."','".$_POST['role']."')");
}
?>
<html>
<head>
</head><body>
<?php include "head.php"; ?>
	<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>User Details</h1>        
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
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add New User</h5>
						</div><!-- /.box-header -->
						<!-- form start -->
						<!--<form role="form">-->
						<div class="box-body">

<form action="adduser.php" method="post">
<table align="center">
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>User Name:</h4></label></td><td><input type="text" name="username" id="username" required></td><td><label><h4><font size="3" face="arial" color="red">*</font>Password:</h4></label></td><td><input type="password" name="password" id="password" required></td>   </tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>First Name:</h4></label></td><td><input type="text" name="firstname" id="firstname" required></td><td><label><h4><font size="3" face="arial" color="red">*</font>Last Name:</h4></label></td><td><input type="text" name="lastname" id="lastname" required></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Address 1:</h4></label></td><td><textarea name="addr1" id="addr1" required></textarea></td><td><label><h4><font size="3" face="arial" color="red">*</font>Address 2:</h4></label></td><td><textarea  name="addr2" id="addr2" required></textarea></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Mobileno 1:</h4></label></td><td><input type="text" name="mobileno" id="mobileno" required></td><td><label><h4>Mobileno 2:</h4></label></td><td><input type="text" name="alterno" id="alterno"></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Mailid:</h4></label></td><td><input type="email" name="email" id="email" required></td><td><label><h4>Landline no:</h4></label></td><td><input type="text" name="landline" id="landline" required></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Door No:</h4></label></td><td><input type="text" name="door" id="door" required></td><td><label><h4><font size="3" face="arial" color="red">*</font>Street:</h4></label></td><td><input type="text" name="street" id="street" required></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Landmark 1:</h4></label></td><td><input type="text" name="land1" id="land1" required></td><td><label><h4>Landmark 2:</h4></label></td><td><input type="text" name="land2" id="land2" ></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Country Name:</h4></label></td>
<td><select name="country" id="country" required>
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
</select></td> 
<td><label><h4><font size="3" face="arial" color="red">*</font>Role Name:</h4></label></td>
<td><select name="role" id="role" required>
<option> -Select Role- </option>
 <?php
  $sql = mysql_query("select * from roledetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['role'];?></option>
  <?php } ?>
</select></td>
</tr>
<td><label><h4><font size="3" face="arial" color="red">*</font>Zone Name:</h4></label></td>
<td><select name="zone" id="zone" required>
<option> -Select Zone- </option>
 <?php
  $sql = mysql_query("select * from zonedetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['zone'];?></option>
  <?php } ?>
</select></td>
<td><label><h4><font size="3" face="arial" color="red">*</font>Pincode: </h4></label></td><td><input type="text" name="pincode" id="pincode" required></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Area Name:</h4></label></td>
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
