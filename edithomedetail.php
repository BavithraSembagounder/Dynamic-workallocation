<?php
include("config.php");
if(isset($_POST['submit']))
{
$query=mysql_query("update homedetails set customername='".$_POST['customername']."',address='".$_POST['address']."',state='".$_POST['state']."',city='".$_POST['city']."',itemname='".$_POST['itemname']."',itemtype='".$_POST['itemtype']."',roomname='".$_POST['roomname']."',measurments='".$_POST['measurments']."' where id='".$_POST['id']."'");
header("Location:homedetailtable.php");
exit;
}

$id = $_GET['id'];
$query = mysql_query("select * from homedetails where id='".$id."'");
$row = mysql_fetch_array($query);
?>
<html>
<head>
</head>
<body>
<body>
<?php include "head.php"; ?>
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
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Update Customer Home Details</h5>
						</div><!-- /.box-header -->
						<!-- form start -->
						<!--<form role="form">-->
						<div class="box-body">
<form action="edithomedetail.php" method="post">
<input type='hidden' name='id' value='<?php echo $row['id']; ?>'>
<table align="center">
<tr><td><label><h4>Customer Name:</h4></label></td><td><input type="text" name="customername" id="customername" value="<?php echo $row['customername'];?>"></td></tr>
<tr><td><label><h4>Address:</h4></label></td><td><input type="text" name="address" id="address" value="<?php echo $row['address'];?>"></td></tr>
<tr><td><label><h4>Item Name:</h4></label></td><td><input type="text" name="itemname" id="itemname" value="<?php echo $row['itemname'];?>"></td></tr>
<tr><td><label><h4>Item Type:</h4></label></td><td><input type="text" name="itemtype" id="itemtype" value="<?php echo $row['itemtype'];?>"></td></tr>
<tr><td><label><h4>Room Name:</h4></label></td><td><input type="text" name="roomname" id="roomname" value="<?php echo $row['roomname'];?>"></td></tr>
<tr><td><label><h4>Measurments:</h4></label></td><td><input type="text" name="measurments" id="measurments" value="<?php echo $row['measurments'];?>"></td></tr>
<tr><td><label><h4>State Name:</h4></label></td>
<td><select name="state" id="state" required>
   <?php
  $sql = mysql_query("select * from statedetails");
  while($rows = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $rows['id']; ?>' <?php if($rows['id'] == $row['state']) { ?> selected <?php } ?>><?php echo $rows['state'];?></option>
  <?php } ?>
</select></td> </tr>
<tr><td><label><h4>City Name:</h4></label></td>
<td><select name="city" id="city" required>
   <?php
  $sql = mysql_query("select * from citydetails");
  while($rows = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $rows['id']; ?>' <?php if($rows['id'] == $row['city']) { ?> selected <?php } ?>><?php echo $rows['city'];?></option>
  <?php } ?>
</select></td> </tr>
 <tr><td colspan="2"><h4 align="center"><input type="submit" name="submit" value="Update"></h4></td></tr>
</table>
</form>
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