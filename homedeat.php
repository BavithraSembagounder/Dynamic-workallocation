<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("master",$con);
if(isset($_GET['did']))
{
$did=$_GET['did'];
$query=mysql_query("delete from homedetail where id='".$did."'");
}
?>
<html>
<head>
</head>
<body>
<table align="right" >
<tr>
<td colspan="2" >
<a href="hd.php"><h2><font color="red"><input type="submit" name="Book" value="Add New"></font></h2></td></a>
</tr>
</table>
<table border="1" align="center">
<br>
<br>
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
</br>
</br>
<?php
$sql=mysql_query("select * from homedetail");
while($row=mysql_fetch_assoc($sql))
{
?>
<tr>
<td><?php echo $row['id']; ?> </td>
<td><?php echo $row['customername']; ?> </td>
<td><?php echo $row['address']; ?> </td>
<td><?php echo $row['state']; ?> </td>
<td><?php echo $row['city']; ?> </td>
<td><?php echo $row['itemname']; ?> </td>
<td><?php echo $row['itemtype']; ?> </td>
<td><?php echo $row['roomname']; ?></td>
<td><?php echo $row['measurments']; ?> </td>
<td><a href="homedeat.php?did=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>