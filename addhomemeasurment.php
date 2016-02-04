<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("master",$con);
if(isset($_POST['submit']))
{
$query=mysql_query("insert into homemeasurmentdetails(roomname,measurments) VALUES ('".$_POST['roomname']."','".$_POST['measurments']."')");
}
?>
<html>
<head>
</head>
<body>
<form action="addhomemeasurment.php" method="post">
<table align="center">
<tr><h2 align="center">Add New Customer Home Measurments Details</h2></tr><br/></br>
<tr><td><h4 align="center"><label>Room Name: <input type="text" name="roomname" id="roomname"></label></h4></td>      <td><h4 align="center"><label>Measurments:  <input type="text" name="measurments" id="measurments"></label></h4></tr>
<tr><td><h4 align="center"><label>Room Name: <input type="text" name="roomname" id="roomname"></label></h4></td>      <td><h4 align="center"><label>Measurments:  <input type="text" name="measurments" id="measurments"></label></h4></tr>
<tr><td><h4 align="center"><label>Room Name: <input type="text" name="roomname" id="roomname"></label></h4></td>      <td><h4 align="center"><label>Measurments:  <input type="text" name="measurments" id="measurments"></label></h4></tr>
<tr><td><h4 align="center"><label>Room Name: <input type="text" name="roomname" id="roomname"></label></h4></td>      <td><h4 align="center"><label>Measurments:  <input type="text" name="measurments" id="measurments"></label></h4></tr>
<tr><td><h4 align="center"><label>Room Name: <input type="text" name="roomname" id="roomname"></label></h4></td>      <td><h4 align="center"><label>Measurments:  <input type="text" name="measurments" id="measurments"></label></h4></tr>
<tr><td><h4 align="center"><label>Room Name: <input type="text" name="roomname" id="roomname"></label></h4></td>      <td><h4 align="center"><label>Measurments:  <input type="text" name="measurments" id="measurments"></label></h4></tr>
<tr><td><h4 align="center"><label>Room Name: <input type="text" name="roomname" id="roomname"></label></h4></td>      <td><h4 align="center"><label>Measurments:  <input type="text" name="measurments" id="measurments"></label></h4></tr>
<tr><td><h4 align="center"><label>Room Name: <input type="text" name="roomname" id="roomname"></label></h4></td>      <td><h4 align="center"><label>Measurments:  <input type="text" name="measurments" id="measurments"></label></h4></tr>
<tr><td colspan="2"><h2 align="center"><input type="submit" name="submit"  value="Add"></h2></td></tr>
</table>
</form>
</body>
</html>