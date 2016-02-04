<?php
include("config.php");
if(isset($_POST['submit']))
{
$query=mysql_query("update areadetails set zone='".$_POST['zone']."',area='".$_POST['area']."' where id='".$_POST['id']."'");
header("Location:areatable.php");
exit;
}

$id = $_GET['id'];
$query = mysql_query("select * from areadetails where id='".$id."'");
$row = mysql_fetch_array($query);
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
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Update Area</h5>
						</div><!-- /.box-header -->
						<!-- form start -->
						<!--<form role="form">-->
						<div class="box-body">

<form action="editarea.php" method="post">
<input type='hidden' name='id' value='<?php echo $row['id']; ?>'>
<table align="center">
<tr><td><label><h4>Zone Name:</h4></label></td>
<td><select name="zone" id="zone" required>
   <?php
  $sql = mysql_query("select * from zonedetails");
  while($rows = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $rows['id']; ?>' <?php if($rows['id'] == $row['zone']) { ?> selected <?php } ?>><?php echo $rows['zone'];?></option>
  <?php } ?>
</select></td> </tr>
<tr><td><label><h4>Area Name:</h4></label></td><td><input type="text" name="area" id="area" value="<?php echo $row['area'];?>"></td></tr>
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