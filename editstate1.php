<?php
include("config.php");
if(isset($_POST['submit']))
{
$query=mysql_query("update statedetails set country='".$_POST['country']."',state='".$_POST['state']."' where id='".$_POST['id']."'");
header("Location:statetable.php");
exit;
}

$id = $_GET['id'];
$query = mysql_query("select * from statedetails where id='".$id."'");
$row = mysql_fetch_array($query);
?>
<html>
<head>
</head>
<form action="editstate.php" method="post">
<table align="center">

<tr><td><label><h4>Country Name:</h4></label></td>
<td><select name="country" id="country" required>
<option> -Select Country- </option>
      <?php
  $sql = mysql_query("select * from countrydetails");
  while($rows = mysql_fetch_array($sql)) { ?>
	<option value='<?php echo $rows['id']; ?>' <?php if($rows['id'] == $row['country']) { ?> selected <?php } ?>><?php echo $rows['country'];?></option>
  <?php } ?>
  </label></select></td></tr> 
<tr><td><label><h4>State Name: </h4></label></td><td><input type="text" name="state" id="state" value="<?php echo $row['state']; ?>"></tr>
<br><tr><td><h2 align="center"><input type="submit" name="submit" value="Update" onClick="check()"></h2></td></tr>
<p>
<font size="2" face="arial" color="red">
</font>
</p>
</table>
</form>
</body>
</html>
