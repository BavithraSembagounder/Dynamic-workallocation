<?php
include("config.php");
if(isset($_POST['submit']))
{
$query=mysql_query("update subcategorydetails set category='".$_POST['category']."',subcategory='".$_POST['subcategory']."',approximateamount='".$_POST['approximateamount']."' where id='".$_POST['id']."'");
header("Location:subcategorytable.php");
exit;
}

$id = $_GET['id'];
$query = mysql_query("select * from subcategorydetails where id='".$id."'");
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
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Update Subcategory</h5>
						</div><!-- /.box-header -->
						<!-- form start -->
						<!--<form role="form">-->
						<div class="box-body">
<form action="editsubcategory.php" method="post">
<input type='hidden' name='id' value='<?php echo $row['id']; ?>'>
<table align="center">
 <tr><h2 align="center">Update Subcategory</h2></tr><br/>
<tr><td><label><h4>Category Name:</h4></label></td>
<td><select name="category" id="category" required>
   <?php
  $sql = mysql_query("select * from categorydetails");
  while($rows = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $rows['id']; ?>' <?php if($rows['id'] == $row['category']) { ?> selected <?php } ?>><?php echo $rows['category'];?></option>
  <?php } ?>
</select></td> </tr>
<tr><td><label><h4>Subcategory Name:</h4></label></td><td><input type="text" name="subcategory" id="subcategory" value="<?php echo $row['subcategory'];?>"></td></tr>
 <tr><td><label><h4>Approximate Amount:</h4></label></td><td><input type="text" name="approximateamount" id="approximateamount" value="<?php echo $row['approximateamount'];?>"></td></tr>
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
	<?php include "navigation.php"; ?>s
	<?php include "footer.php"; ?>
</body>
</html>