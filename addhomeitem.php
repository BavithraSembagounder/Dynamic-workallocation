<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("master",$con);
if(isset($_POST['submit']))
{
$query=mysql_query("insert into homeitem(itemtype,itemname,nos) VALUES ('".$_POST['itemtype']."','".$_POST['itemname']."','".$_POST['nos']."')");
}
?>
<html>
<head>
</head>
<body>
<form action="addhomeitem.php" method="post">
<table align="center">
<tr><h2 align="center">Customer Home Item Details</h2></tr><br/></br>
<tr><td><h4 align="center">Item Type: <select name="itemtype" id="itemtype">  
<option>--Select Item--</option> 
 <?php
  $sql = mysql_query("select * from categorydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['category'];?></option>
  <?php } ?></select></td>  <td><h4 align="center">Item Name: <input type="text" name="itemname" id="itemname"></h4></td><td><h4 align="center"><label>Nos:  <input type="text" name="nos" id="nos"></label></h4></td></tr>
<tr><td><h4 align="center">Item Type: <select name="itemtype" id="itemtype">  
<option>--Select Item--</option> 
 <?php
  $sql = mysql_query("select * from categorydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['category'];?></option>
  <?php } ?></select></td>  <td><h4 align="center">Item Name: <input type="text" name="itemname" id="itemname"></h4></td><td><h4 align="center"><label>Nos:  <input type="text" name="nos" id="nos"></label></h4></td></tr>
<tr><td><h4 align="center">Item Type: <select name="itemtype" id="itemtype">  
<option>--Select Item--</option> 
 <?php
  $sql = mysql_query("select * from categorydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['category'];?></option>
  <?php } ?></select></td>  <td><h4 align="center">Item Name: <input type="text" name="itemname" id="itemname"></h4></td><td><h4 align="center"><label>Nos:  <input type="text" name="nos" id="nos"></label></h4></td></tr>
<tr><td><h4 align="center">Item Type: <select name="itemtype" id="itemtype">  
<option>--Select Item--</option> 
 <?php
  $sql = mysql_query("select * from categorydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['category'];?></option>
  <?php } ?></select></td>  <td><h4 align="center">Item Name: <input type="text" name="itemname" id="itemname"></h4></td><td><h4 align="center"><label>Nos:  <input type="text" name="nos" id="nos"></label></h4></td></tr>
<tr><td><h4 align="center">Item Type: <select name="itemtype" id="itemtype">  
<option>--Select Item--</option> 
 <?php
  $sql = mysql_query("select * from categorydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['category'];?></option>
  <?php } ?></select></td>  <td><h4 align="center">Item Name: <input type="text" name="itemname" id="itemname"></h4></td><td><h4 align="center"><label>Nos:  <input type="text" name="nos" id="nos"></label></h4></td></tr>
<tr><td><h4 align="center">Item Type: <select name="itemtype" id="itemtype">  
<option>--Select Item--</option> 
 <?php
  $sql = mysql_query("select * from categorydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['category'];?></option>
  <?php } ?></select></td>  <td><h4 align="center">Item Name: <input type="text" name="itemname" id="itemname"></h4></td><td><h4 align="center"><label>Nos:  <input type="text" name="nos" id="nos"></label></h4></td></tr>
<tr><td><h4 align="center">Item Type: <select name="itemtype" id="itemtype">  
<option>--Select Item--</option> 
 <?php
  $sql = mysql_query("select * from categorydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['category'];?></option>
  <?php } ?></select></td>  <td><h4 align="center">Item Name: <input type="text" name="itemname" id="itemname"></h4></td><td><h4 align="center"><label>Nos:  <input type="text" name="nos" id="nos"></label></h4></td></tr>
<tr><td><h4 align="center">Item Type: <select name="itemtype" id="itemtype">  
<option>--Select Item--</option> 
 <?php
  $sql = mysql_query("select * from categorydetails");
  while($row = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $row['id']; ?>'><?php echo $row['category'];?></option>
  <?php } ?></select></td>  <td><h4 align="center">Item Name: <input type="text" name="itemname" id="itemname"></h4></td><td><h4 align="center"><label>Nos:  <input type="text" name="nos" id="nos"></label></h4></td></tr>
  <tr><td colspan="2"><h2 align="center"><input type="submit" name="submit"  value="Add" onClick="check()"></h2></td></tr>
</table>
</form>
</body>
</html>