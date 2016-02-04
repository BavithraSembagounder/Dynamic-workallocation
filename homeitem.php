<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("master",$con);
if(isset($_GET['did']))
{
$did=$_GET['did'];
$query=mysql_query("delete from homeitem where id='".$did."'");
}
?>
<html>
<head>
</head>
<body>
<table align="right" >
<tr>
<td colspan="2" >
<a href="hi.php"><h2><font color="red"><input type="submit" name="Book" value="Add New"></font></h2></td></a>
</tr>
</table>
<table border="1" align="center">
<br>
<br>
<br>
<tr>
<th size="10" width="10%">Id</th>
<th size="10" width="10%">Item Type</th>
<th size="10" width="10%">Item Name</th>
<th size="10" width="10%">Nos</th>
<th size="10" width="10%">Delete</th>
</tr>
</br>
</br>
</br>
<?php
$sql=mysql_query("select * from homeitem");
while($row=mysql_fetch_assoc($sql))
{
?>
<tr>
<td><?php echo $row['id']; ?> </td>
<td><?php echo $row['itemtype']; ?></td>
<td><?php echo $row['itemname']; ?> </td>
<td><?php echo $row['nos']; ?></td>
<td><a href="homeitem.php?did=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>