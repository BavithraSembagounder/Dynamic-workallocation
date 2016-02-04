<?php
include("config.php");
if(isset($_POST['submit']))
{
$query=mysql_query("update homeitemdetails set itemtype='".$_POST['itemtype']."',itemname='".$_POST['itemname']."',nos='".$_POST['nos']."', where id='".$_POST['id']."'");
header("Location:homeitemtable.php");
exit;
}

$id = $_GET['id'];
$query = mysql_query("select * from homeitemdetails where id='".$id."'");
$row = mysql_fetch_array($query);
?>
<html>
<head>
</head>
<form action="edithomeitem.php" method="post">
<table align="center">
<tr><h2 align="center">Update Homeitem</h2></tr>
<tr><td><label><h4>Item Type:</label></td> <td><select name="itemtype" id="itemtype" required>
<option> -Select Itemtype- </option>
      <?php
  $sql = mysql_query("select * from categorydetails");
  while($rows = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $rows['id']; ?>' <?php if($rows['id'] == $row['category']) { ?> selected <?php } ?>><?php echo $rows['category'];?></option>
  <?php } ?>
  </label></select></td></tr> 
<tr><td><label><h4>Item Name: </h4></label></td><td><input type="text" name="itemname" id="itemname" value="<?php echo $row['itemname']; ?>"></tr>
<tr><td><label><h4>Nos: </h4></label></td><td><input type="text" name="nos" id="nos" value="<?php echo $row['nos']; ?>"></tr>
<br><tr><td><h2 align="center"><input type="submit" name="submit" value="Update" onClick="check()"></h2></td></tr>
<p>
<font size="2" face="arial" color="red">
</font>
</p>
</table>
</form>
</body>
</html>
