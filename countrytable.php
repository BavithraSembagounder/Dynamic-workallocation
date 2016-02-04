<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dwa",$con);
if(isset($_GET['did']))
{
$did=$_GET['did'];
$query=mysql_query("delete from countrydetails where id='".$did."'");
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
			<h1>Country Details</h1>        
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
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCountry Details List</h5>
						</div><!-- /.box-header -->
						<!-- form start -->
						<!--<form role="form">-->
						<div class="box-body">
							<form name="register" action="addcountry.php" method="post">

<table align="right">
<tr>
<td colspan="2">
<a href="addcountry.php"><h4><font color="red"><input type="submit" name="Book" value="Add New"></font></h4></td></a>
</tr>
</table>
<table border="2" align="center" bgcolor="#ccffff">
<br>
<br>
<br>

<tr>
<th bgcolor="66CCFF" size="10" width="10%">Id</th>
<th bgcolor="66CCFF" size="10" width="10%">Country</th>
<th bgcolor="66CCFF" size="10" width="10%">Delete</th>
</tr>
</br>
</br>
</br>
<?php
$sql=mysql_query("select * from countrydetails");
while($row=mysql_fetch_assoc($sql))
{
?>
<tr>
<td><a href="editcountry.php?id=<?php echo $row['id'];?>"><?php echo $row['id']; ?> </a></td>
<td><?php echo $row['country']; ?></td>
<td><a href="countrytable.php?did=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php } ?>
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