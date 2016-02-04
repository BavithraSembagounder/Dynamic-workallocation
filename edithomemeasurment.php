<?php
include("config.php");
if(isset($_POST['submit']))
{
$query=mysql_query("update homemeasurmentdetails set roomname='".$_POST['roomname']."',measurments='".$_POST['measurments']."' where id='".$_POST['id']."'");
header("Location:statetable.php");
exit;
}

$id = $_GET['id'];
$query = mysql_query("select * from homemeasurmentdetails where id='".$id."'");
$row = mysql_fetch_array($query);
?>
<html>
<head>
</head>
<form action="edithomemeasurment.php" method="post">
<table align="center">
<tr><h2 align="center">Update Customer Home Measurment Details</h2></tr>
<tr><td><label><h4>Room Name: </h4></label></td><td><input type="text" name="roomname" id="roomname" value="<?php echo $row['roomname']; ?>"></tr>
<tr><td><label><h4>Measurment: </h4></label></td><td><input type="text" name="measurments" id="measurments" value="<?php echo $row['measurments']; ?>"></tr>
<br><tr><td><h2 align="center"><input type="submit" name="submit" value="Update" onClick="check()"></h2></td></tr>
<p>
<font size="2" face="arial" color="red">
</font>
</p>
</table>
</form>
</body>
</html>
