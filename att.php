<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dwa",$con);
if(isset($_POST['submit']))
{
$query=mysql_query("insert into attendance(name,location,in_time) VALUES ('".$_POST['name']."','".$_POST['location']."','".$_POST['in_time']."')");
echo"Submittedted successfully";
}
?>
<html>
<head>
</head>
<body>
<?php include "head.php"; ?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            
            <!--<small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>-->
           <!-- <li class="active">Calltaxi Workers</li>-->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
				
<table align="center">
<form name="attendance" action="att.php" method="post" onSubmit="return check(this)">

<div>
<th><h1><font color="0033CC" font style="Comic Sans MS">Attendance</font></h1></th>
<!--<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Emp Id</h4></label></td><td><input type="text" size="35px" name="emp_id" id="emp_id" required></td></tr>-->
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Name</h4></label></td><td><input type="text" size="35px" name="name" id="name" required></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Location</h4></label></td><td><input type="text" size="35px" name="location" id="location" required></td></tr>
<tr><td><label><h4><font size="3" face="arial" color="red">*</font>In time</h4></label>
<td><input type="text"></td>
<td><select name="in_time" id="in_time"required>
<option> -Select- </option>
<option> AM </option>
<option> PM </option>
</select>
</td>
</tr>

<!--<tr><td><label><h4><font size="3" face="arial" color="red">*</font>In time</h4></label></td><td><input type="text" name="in_time" id="in_ime" id=""required></td></tr>-->
<!--<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Main category</h4></label></td>
<td><select name="main_category" id="main_cat"  required>
<option> --Select main category--</option>
<option> Plumbing </option>
<option> Electicalwork</option>
<option> Interiordesign</option>
<option> Calltaximanagement</option>
<option>Carpentory </option>
<option>Catering </option>
<option>Housekeeping </option> 
</select></td>
</tr>-->
<tr><td><h4><center><input type="submit" name="submit" value="Submit"></h4></center></td>
<td><h4><center><input type="reset" name="reset" value="Reset"></h4></center></td></tr>
</div>
</form>
</table>
</div><!-- /.box-body -->
              </div><!-- /.box -->

          
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div>
<?php include "navigation.php"; ?>
<?php include "footer.php"; ?>
</body>
</html>