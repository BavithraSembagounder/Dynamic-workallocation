<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dwa",$con);
if(isset($_POST['submit']))
{
$query=mysql_query("insert into online_book(name,addr,mob_no,alt_no,mail,main_category,sub_category,location,due_date,time) VALUES ('".$_POST['name']."','".$_POST['addr']."','".$_POST['mob_no']."','".$_POST['alt_no']."','".$_POST['mail']."','".$_POST['main_category']."','".$_POST['sub_category']."','".$_POST['location']."','".$_POST['due_date']."','".$_POST['time']."')");
	//$sql=mysql_query("insert into emp_details(emp_id,name,addr,mob_no,alt_no,mail,type_service,location,per_hr pay) VALUES('".$_POST['emp_id']."','".$_POST['name']."','".$_POST['addr']."','".$_POST['mob_no']."','".$_POST['alt_no']."','".$_POST['mail']."','".$_POST['type_service']."','".$_POST['location']."','".$_POST['per_hr pay']."') ");
	//echo "insert into emp_details(emp_id,name,addr,mob_no,alt_no,mail,type_service,location,per_hr pay) VALUES('".$_POST['emp_id']."','".$_POST['name']."','".$_POST['addr']."','".$_POST['mob_no']."','".$_POST['alt_no']."','".$_POST['mail']."','".$_POST['type_service']."','".$_POST['location']."','".$_POST['per_hr pay']."') ";
	//echo "insert into emp_details(emp_id,name,addr,mob_no,alt_no,mail,type_service,location,per_hr) VALUES ('".$_POST['emp_id']."','".$_POST['name']."','".$_POST['addr']."','".$_POST['mob_no']."','".$_POST['alt_no']."','".$_POST['mail']."','".$_POST['type_service']."','".$_POST['location']."','".$_POST['per_hr']."')";
	//exit;
//echo"Submittedted successfully";

}

?>

<html>
<head>
<style>
body {
  margin: 0;
  padding: 0;
  background: #F8F8F8;
}
.form-textbox
{
height: 45px ;
width: 220px;
}
#header {
    background-color:FFFF99;
    color:white;
    text-align:center;
    padding:10px;
	font-weight:250px;
	}
	h1
{
font-family:Yu Mincho Demibold;
text-align:center;
}
h4
{
font-family:Kalinga;
}
.nav ul {
  list-style: none;
  background-color: #444;
  text-align: center;
  padding: 0;
  margin: 0;
}
.nav li {
  font-family: 'Oswald', sans-serif;
  font-size: 1.2em;
  line-height: 40px;
  height: 40px;
  border-bottom: 1px solid #888;
}
 
.nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  transition: .3s background-color;
}
 
.nav a:hover {
  background-color: CC33CC;
}
 
.nav a.active {
  background-color: #fff;
  color: #444;
  cursor: default;
}
 
@media screen and (min-width: 600px) {
  .nav li {
    width: 120px;
    border-bottom: none;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
  }
 
   /*Option 1 - Display Inline*/ 
  .nav li {
    display: inline-block;
    margin-right: -4px;
  }
 
 /* Options 2 - Float
  .nav li {
    float: left;
  }
  .nav ul {
    overflow: auto;
    width: 600px;
    margin: 0 auto;
  }*/
  .nav {
    //background-color:99CCFF;
  }
  
}

</style>

<div id="header">
<tr><td><h1 align="center"><font color="#0000ff" font weight:"180px">Butterfly Services</font></h1></td></tr>
</div>
<body>

  <header>
    <div class="nav">
      <ul>
        <li class="home"><a href="home.php">Home</a></li>
        <li class="about"><a href="about.php">About Us</a></li>
        <li class="services"><a href="service.php">Services</a></li>
		<li class="register"><a href=test1.php">Registration</a></li>
		<li class="tariff"><a href="tar.php">Tariff</a></li>
      </ul>
    </div>
  </header>-->
  </head>
 
<table>


<form name="register" action="test1.php" method="post" onSubmit="return check(this)">
<table align="center">
<div>
<th><h1><font color="0033CC" font style="Comic Sans MS">Customer Details form</font></h1></th>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Name</h4></label></td><td><input type="text" size="35px" name="name" id="name" required onBlur="username()"></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Address</h4></label></td><td><textarea rows="5" cols="25" name="addr" id="addr" required></textarea></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Mobileno 1</h4></label></td><td><input type="text" size="35px" name="mob_no" id="mb_no" required></td></tr>
<tr><td><label><h4>Mobileno 2</h4></label></td><td><input type="text" size="35px" name="alt_no" id="alt_no"></td></tr>
<tr><td><label><h4>Mailid</h4></label></td><td><input type="email" size="35px" name="mail" id="mail" required></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Main category</h4></label></td>
<td><select name="main_category" id="main_cat" onChange="menu(this.value);" required>
<option value=""> -Select Main Service- </option>

<?php
$sql=mysql_query("select * from main_category");
while($row=mysql_fetch_assoc($sql))
{
?>
<option value="<?php echo $row['Id']; ?>"><?php echo $row['categoty_main'];?></option>
<?php } ?>
<!--
<option> Plumbing </option>
<option> Electicalwork</option>
<option> Interiordesign</option>
<option> Calltaximanagement</option>
<option>Carpentory </option>
<option>Catering </option>
<option>Housekeeping </option>  -->
</select>
</td></tr>

<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Sub category</h4></label></td>

<td><div id="detail"><select name="sub_category" id="sub_cat" required>

<option value=""> -Select Sub Service- </option>
<?php
$sql=mysql_query("select * from sub_category where categoty_main='".$_GET['sub']."'");
//echo "select * from sub_category where categoty_main='".$_GET['sub']."'";
while($row=mysql_fetch_assoc($sql))
{
?>
<option  value="<?php echo $row['category_sub1']; ?>"><?php  echo $row['category_sub1']; ?></option>
<?php } ?>
</select>
<!--<option> Living room </option>
<option> Tap</option>
<option> Shower</option>
<option> door fitting</option>
<option> Kitchen</option>-->
</div></td>
</tr>
<tr><td><label><h4>Location</h4></label></td><td><input type="text" size="35px" name="location" id="area" required></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Due date</h4></label></td><td><input type="date" size="35px" name="due_date" id="date" required></td></tr>
<tr><td><label><h4>Timing</h4></label></td><td><input type="time" size="35px" name="time" id="time" required></td></tr>
<tr><td><h2><center><input type="submit" name="submit" value="Submit" onClick="check()"></h2></center></td>
<td><h2><center><input type="reset" name="reset" value="Reset"></h2></center></td></tr>
<p>
<font size="2" face="arial" color="red">
*Mandatory Field
</font>
</p>
</table>
</form>

<script>

function getXMLHTTP()
{
var xmlhttp=false;
try
{
xmlhttp= new XMLHttpRequest();
}
catch(e)
{
try
{
xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
}

catch(e)
{
try
{
xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
}
catch(e1)
{
xmlhttp=false;
}
}
}
return xmlhttp;
}

function menu(val1)
{
	
	var strURL="catrgory.php?sub="+val1; 
	
	var req = getXMLHTTP();
	if (req) 
	{
		req.onreadystatechange = function() 
		{
			if (req.readyState == 4) {
				// only if "OK" 
				if (req.status == 200) {	
					document.getElementById('detail').innerHTML=req.responseText;					
				} else {
					alert("There was a problem while using XMLHTTP:\n" + req.statusText);
				}
			}				
		}			
		req.open("GET", strURL, true);
		req.send(null);
    }	
}


function check()
{
if(document.getElementById('name').value=="")
{
alert("Mandatory Field should not be empty");
}
else if(document.getElementById('addr').value=="")
{
alert("Mandatory Field should not be empty");
}
else if(document.getElementById('mb_no').value=="")
{
alert("Mandatory Field should not be empty");
}
else if(document.getElementById('alt_no').value=="")
{
alert("Mandatory Field should not be empty");
}
else if(document.getElementById('mail').value=="")
{
alert("Mandatory Field should not be empty");
}

else if(document.getElementById('main_cat').value=="")
{
alert("Mandatory Field should not be empty");
}
else if(document.getElementById('sub_cat').value=="")
{
alert("Mandatory Field should not be empty");
}
else if(document.getElementById('area').value=="")
{
alert("Mandatory Field should not be empty");
}
else if(document.getElementById('date').value=="")
{
alert("Mandatory Field should not be empty");
}
else if(document.getElementById('time').value=="")
{
alert("Mandatory Field should not be empty");
}
else
{
alert("Submitted");

}
}
</script>

</body>
</html>
