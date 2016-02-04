<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("master",$con);
if(isset($_POST['submit']))
{
$query=mysql_query("insert into homedetail(customername,address,state,city,itemname,itemtype,roomname,measurments) VALUES ('".$_POST['customername']."','".$_POST['address']."','".$_POST['state']."','".$_POST['city']."','".$_POST['itemname']."','".$_POST['itemtype']."','".$_POST['roomname']."','".$_POST['measurments']."')");
}
?>
<html>
<head>
</head>
<body>
<form action="hd.php" method="post">
<table align="center">
<tr><h2 align="center">Customer Home Details</h2></tr><br/>
<tr><h4 align="center"><font color="red">*</font><label>Customer Name: <input type="text" name="customername" id="customername">   <font color="red">*</font>Address:  <input type="text" name="address" id="address"></label></h4></tr>
<tr><h4 align="center"><font color="red">*</font><label>Item Name: <input type="text" name="itemname" id="itemname">       <font color="red">*</font>Item Type:  <input type="text" name="itemtype" id="itemtype"></label></h4></tr>
<tr><h4 align="center"><font color="red">*</font><label>State: <input type="text" name="state" id="state">           <font color="red">*</font>City:  <input type="text" name="city" id="city"></label></h4></tr>
<tr><h4 align="center"><font color="red">*</font><label>Room Name: <input type="text" name="roomname" id="roomname">       <font color="red">*</font>Measurments:  <input type="text" name="measurments" id="measurments"></label></h4></tr>
<tr><h4 align="center"><label>country Name: <input type="text" name="countryname" id="countryname">                              <font color="red">*</font>Pincode:  <input type="text" name="pincode" id="pincode"></label></h4></tr>
<tr><td colspan="2"><h2 align="center"><input type="submit" name="submit"  value="Add"></h2></td></tr>
</table>
</form>
</body>
</html>