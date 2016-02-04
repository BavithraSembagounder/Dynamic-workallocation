<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dwa",$con);
if(isset($_GET['did']))
{
$did=$_GET['did'];
$query=mysql_query("delete from homedetails where id='".$did."'");
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
			<h1>Home Details</h1>        
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
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Customer Home Details</h5>
						</div><!-- /.box-header -->
						<!-- form start -->
						<!--<form role="form">-->
						<div class="box-body">
<form action="addhomedetail.php" method="post">
<table align="right" >
<tr>
<td colspan="2" >
<a href="addhomedetail.php"><h4><font color="red"><input type="submit" name="Book" value="Add New"></font></h4></td></a>
</tr>
</table>
<table border="1" align="center">
<br>
<tr>
<th size="10" width="10%">Id</th>
<th size="10" width="10%">Customer Name</th>
<th size="10" width="10%">Address</th>
<th size="10" width="10%">State</th>
<th size="10" width="10%">City</th>
<th size="10" width="10%">Item Name</th>
<th size="10" width="10%">Item type</th>
<th size="10" width="10%">Room Name</th>
<th size="10" width="10%">Measurments</th>
<th size="10" width="10%">Delete</th>
</tr>
</br>
<?php
$sql=mysql_query("select * from homedetails");
while($row=mysql_fetch_assoc($sql))
{
?>
<tr>
<td><a href="edithomedetail.php?id=<?php echo $row['id'];?>"><?php echo $row['id']; ?> </a></td>
<td><?php echo $row['customername']; ?> </td>
<td><?php echo $row['address']; ?> </td>
<td><?php echo $row['state']; ?> </td>
<td><?php echo $row['city']; ?> </td>
<td><?php echo $row['itemname']; ?> </td>
<td><?php echo $row['itemtype']; ?> </td>
<td><?php echo $row['roomname']; ?></td>
<td><?php echo $row['measurments']; ?> </td>
<td><a href="homedetailtable.php?did=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php } ?>
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