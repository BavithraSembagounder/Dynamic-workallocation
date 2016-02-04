<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("master",$con);
if(isset($_GET['did']))
{
$did=$_GET['did'];
$query=mysql_query("delete from workitemdetails where id='".$did."'");
}
?>
<html>
<head>
</head>
<body>
<table align="right">
<tr>
<td colspan="2">
<a href="addworkitem.php"><h2><font color="red"><input type="submit" name="Book" value="Add New"></font></h2></td></a>
</tr>
</table>
<table border="2" align="center" bgcolor="#ccffff">
<br>
<br>
<br>
<tr><h2 align="center">Workitem Details List</h4></tr>
<tr>
<th size="10" width="10%">Id</th>
<th size="10" width="10%">Subcategory</th>
<th size="10" width="10%">Delete</th>
</tr>
</br>
</br>
</br>
<?php
$sql=mysql_query("select * from workitemdetails");
while($row=mysql_fetch_assoc($sql))
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['subcategory']; ?></td>
<td><a href="workitemtable.php?did=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>