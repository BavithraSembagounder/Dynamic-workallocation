<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("dwa",$con);
	if(isset($_POST['submit']))
	{
		$query=mysql_query("insert into call_booking(name,addr,mob_no,alt_no,mail,main_category,sub_category,location,due_date,time,remark) VALUES ('".$_POST['name']."','".$_POST['addr']."','".$_POST['mob_no']."','".$_POST['alt_no']."','".$_POST['mail']."','".$_POST['main_category']."','".$_POST['sub_category']."','".$_POST['location']."','".$_POST['due_date']."','".$_POST['time']."','".$_POST['remark']."')");
		//echo "insert into online_book(name,addr,mob_no,alt_no,mail,main_category,sub_category,location,due_date,time) VALUES ('".$_POST['name']."','".$_POST['addr']."','".$_POST['mob_no']."','".$_POST['alt_no']."','".$_POST['mail']."','".$_POST['main_category']."','".$_POST['sub_category']."','".$_POST['location']."','".$_POST['due_date']."','".$_POST['time']."')";

		//$sql=mysql_query("insert into emp_details(emp_id,name,addr,mob_no,alt_no,mail,type_service,location,per_hr pay) VALUES('".$_POST['emp_id']."','".$_POST['name']."','".$_POST['addr']."','".$_POST['mob_no']."','".$_POST['alt_no']."','".$_POST['mail']."','".$_POST['type_service']."','".$_POST['location']."','".$_POST['per_hr pay']."') ");
		//echo "insert into online_book(name,addr,mob_no,alt_no,mail,main_category,sub_category,location,due_date,time) VALUES ('".$_POST['name']."','".$_POST['addr']."','".$_POST['mob_no']."','".$_POST['alt_no']."','".$_POST['mail']."','".$_POST['main_category']."','".$_POST['sub_category']."','".$_POST['location']."','".$_POST['due_date']."','".$_POST['time']."')";
		//echo "insert into emp_details(emp_id,name,addr,mob_no,alt_no,mail,type_service,location,per_hr) VALUES ('".$_POST['emp_id']."','".$_POST['name']."','".$_POST['addr']."','".$_POST['mob_no']."','".$_POST['alt_no']."','".$_POST['mail']."','".$_POST['type_service']."','".$_POST['location']."','".$_POST['per_hr']."')";
		//exit;
		//echo"Submittedted successfully";

	}
?>
<html>
	<head>

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
						if (req.readyState == 4) 
						{
							// only if "OK" 
							if (req.status == 200) 
							{	
								document.getElementById('detail').innerHTML=req.responseText;					
							} else 
							{
								alert("There was a problem while using XMLHTTP:\n" + req.statusText);
							}
						}				
					}			
					req.open("GET", strURL, true);
					req.send(null);
				}	
			}

		</script>
	</head>
<body>
	<?php include"head.php";?>
	<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Call Booking</h1>        
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<!-- left column -->
				<div class="col-xs-12">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h5 class="box-title">Registration</h5>
						</div><!-- /.box-header -->
						<!-- form start -->
						<!--<form role="form">-->
						<div class="box-body">
							<form name="register" action="call.php" method="post" onSubmit="return check(this)">
								<table class="table table-hover">
									<div>
										<tr><td><label><h5><font size="3" face="arial" color="red">*</font>Name</h5></label></td><td><input type="text" size="35px" name="name" id="name" required onBlur="username()"></td></tr>
										<tr><td><label><h5><font size="3" face="arial" color="red">*</font>Address</h5></label></td><td><textarea rows="5" cols="25" name="addr" id="addr" required></textarea></td></tr>
										<tr><td><label><h5><font size="3" face="arial" color="red">*</font>Mobileno 1</h5></label></td><td><input type="text" size="35px" name="mob_no" id="mb_no" required></td></tr>
										<tr><td><label><h5>Mobileno 2</h5></label></td><td><input type="text" size="35px" name="alt_no" id="alt_no"></td></tr>
										<tr><td><label><h5>Mailid</h5></label></td><td><input type="email" size="35px" name="mail" id="mail" required></td></tr>
										<tr><td><label><h5><font size="3" face="arial" color="red">*</font>Main category</h5></label></td>
										<td><select name="main_category" id="main_cat" onChange="menu(this.value);" required>
										<option value=""> -Select Main Service- </option>
										<?php
											$sql=mysql_query("select * from main_category");
											while($row=mysql_fetch_assoc($sql))
											{
												?>
												<option value="<?php echo $row['Id']; ?>"><?php echo $row['categoty_main'];?></option>
												<?php 
											} 
										?>
										</select>
										</td></tr>
										<tr><td><label><h5><font size="3" face="arial" color="red">*</font>Sub category</h5></label></td>
										<td><div id="detail"><select name="sub_category" id="sub_cat" required>
										<option value=""> -Select Sub Service- </option>
										<?php
											$sql=mysql_query("select * from sub_category where categoty_main='".$_GET['sub']."'");
											//echo "select * from sub_category where categoty_main='".$_GET['sub']."'";
											while($row=mysql_fetch_assoc($sql))
											{
												?>
												<option  value="<?php echo $row['category_sub1']; ?>"><?php  echo $row['category_sub1']; ?></option>
												<?php 
											} 
										?>
										</select>
										</div></td></tr>
										<tr><td><label><h5>Location</h5></label></td><td><input type="text" size="35px" name="location" id="area" required></td></tr>
										<tr><td><label><h5><font size="3" face="arial" color="red">*</font>Due date</h5></label></td><td><input type="date" size="35px" name="due_date" id="date" required></td></tr>
										<tr><td><label><h5>Timing</h5></label></td><td><input type="time" size="35px" name="time" id="time" required></td></tr>
										<tr><td><label><h5><font size="3" face="arial" color="red">*</font>Remark</h5></label></td><td><textarea rows="5" cols="25" name="remark" id="remark" required></textarea></td></tr>
										<tr><td><h3 align="center"><input type="submit" name="submit" value="Submit" onClick="check()"></h3></td>
										<td><h3><input type="reset" name="reset" value="Reset"></h3></td></tr>
									</div>
								</table>
							</form>
						</div>
					</div>      
					<!--</form>-->
				</div>
			</div>
		</section>	
	</div>
	<!-- /.box -->
	<?php include "navigation.php"; ?>
	<?php include "footer.php"; ?>
</body>
</html>
