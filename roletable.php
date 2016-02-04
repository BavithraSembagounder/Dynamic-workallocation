<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dwa",$con);
if(isset($_GET['did']))
{
$did=$_GET['did'];
$query=mysql_query("delete from roledetails where id='".$did."'");
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
			<h1>Role Details</h1>        
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
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Role Details List</h5>
						</div><!-- /.box-header -->
						<!-- form start -->
						<!--<form role="form">-->
						<div class="box-body">
						<form action="addrole.php" method="post">
<table align="right" >
<tr>
<td colspan="2" >
<a href="addrole.php"><h4><font color="red"><input type="submit" name="Book" value="Add New"></font></h4></td></a>
</tr>
</table>
<table border="1" align="center" bgcolor="ccffff">
<br>
<br>
<br>
<tr>
<th bgcolor="ccffff" size="10" width="10%">Id</th>
<th size="10" width="10%">Role</th>
<th size="10" width="10%">Delete</th>
</tr>
</br>
</br>
</br>
<?php
$sql=mysql_query("select * from roledetails");
while($row=mysql_fetch_assoc($sql))
{
?>
<tr>
<td><a href="editrole.php?id=<?php echo $row['id'];?>"><?php echo $row['id']; ?> </td>
<td><?php echo $row['role']; ?></td>
<td><a href="roletable.php?did=<?php echo $row['id']; ?>">Delete</a></td>
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