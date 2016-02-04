<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("master",$con);
if(isset($_POST['submit']))
{
$query=mysql_query("insert into workitemdetails(subcategory) VALUES ('".$_POST['subcategory']."')");
}
?>
<html>
<head>
</head>
<body>
<form action="addworkitem.php" method="post">
<table align="center">
 <tr><h2 align="center"> Add New Workitem</h2></tr><br/>
<tr>
  <br><h4 align="center"><label>Subcategory Name:  <select name="subcategory" id="subcategory"></h4> 
 <option>--Select Subcategory--</option>
  <?php
  $sql = mysql_query("select * from subcategorydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['subcategory'];?></option>
  <?php } ?>
 </select>
 </tr>
 <tr><td><h4 align="center"><label>Items: </label><input type="text"  name="subcategory" id="subcategory"></label></h4>      <td><h4 align="center"><label>Nos: </label><input type="text"  name="subcategory" id="subcategory"></label></h4></tr>
 <tr><td><h4 align="center"><label>Items: </label><input type="text"  name="subcategory" id="subcategory"></label></h4>      <td><h4 align="center"><label>Nos: </label><input type="text"  name="subcategory" id="subcategory"></label></h4></tr>
<tr><td><h4 align="center"><label>Items: </label><input type="text"   name="subcategory" id="subcategory"></label></h4>      <td><h4 align="center"><label>Nos: </label><input type="text"  name="subcategory" id="subcategory"></label></h4></tr>
<tr><td><h4 align="center"><label>Items: </label><input type="text"   name="subcategory" id="subcategory"></label></h4>      <td><h4 align="center"><label>Nos: </label><input type="text"  name="subcategory" id="subcategory"></label></h4></tr>
<tr><td><h4 align="center"><label>Items: </label><input type="text"   name="subcategory" id="subcategory"></label></h4>      <td><h4 align="center"><label>Nos: </label><input type="text"  name="subcategory" id="subcategory"></label></h4></tr>
<tr><td><h4 align="center"><label>Items: </label><input type="text"   name="subcategory" id="subcategory"></label></h4>      <td><h4 align="center"><label>Nos: </label><input type="text"  name="subcategory" id="subcategory"></label></h4></tr>
<tr><td><h4 align="center"><label>Items: </label><input type="text"   name="subcategory" id="subcategory"></label></h4>      <td><h4 align="center"><label>Nos: </label><input type="text"  name="subcategory" id="subcategory"></label></h4></tr>
 <tr><td colspan="2"><h2 align="center"><input type="submit" name="submit"  value="Add" onClick="check()"></h2></td>
</tr>
</table>
</form>
</body>
</html>