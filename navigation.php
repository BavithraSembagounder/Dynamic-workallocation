<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("dwa",$con);
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Butterfly Services</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
		<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
		page. However, you can choose any other skin. Make sure you
		apply the skin class to the body tag so the changes take effect.
		-->
		<link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p>Butterfly Services
					</p>
					<!-- Status -->
					<!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
				</div>
			</div>
			<!-- search form (Optional) -->
			<form action="#" method="get" class="sidebar-form">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>
			<!-- /.search form -->
			<!-- Sidebar Menu -->
			<ul class="sidebar-menu">
				<li class="header">Butterfly Services</li>
				<!-- Optionally, you can add icons to the links -->
				<li class="treeview"><a href="#"><i class="fa fa-home text-aqua"></i><span>Master</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul class="treeview-menu">
						<li><a href="countrytable.php"><i class ="fa fa-circle-o text-yellow"></i>Country</a></li>
						<li><a href="statetable.php"><i class ="fa fa-circle-o text-yellow"></i>State</a></li>
						<li><a href="citytable.php"><i class ="fa fa-circle-o text-yellow"></i>City</a></li>
						<li><a href="zonetable.php"><i class ="fa fa-circle-o text-yellow"></i>Zone</a></li>
						<li><a href="areatable.php"><i class ="fa fa-circle-o text-yellow"></i>Area</a></li>
						<li><a href="roletable.php"><i class ="fa fa-circle-o text-yellow"></i>Roles</a></li>
						<li><a href="usertable.php"><i class ="fa fa-circle-o text-yellow"></i>Users</a></li>
						<li><a href="customertable.php"><i class ="fa fa-circle-o text-yellow"></i>Customers</a></li>
						<li><a href="categorytable.php"><i class ="fa fa-circle-o text-yellow"></i>Categories</a></li>
						<li><a href="subcategorytable.php"><i class ="fa fa-circle-o text-yellow"></i>Sub categories</a></li>
						<li><a href="workitemtable.php"><i class ="fa fa-circle-o text-yellow"></i>Work items</a></li>
					</ul>
				</li>
				
				<li class="treeview"><a href="#"><i class="fa fa-trophy text-aqua"></i><span>Services</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul class="treeview-menu">
						<li><a href="book.php"><i class ="fa fa-circle-o text-yellow"></i>New booking</a></li>
						<li><a href="#"><i class ="fa fa-circle-o text-yellow"></i>Booking Approval</a></li>
						<li><a href="#"><i class ="fa fa-circle-o text-yellow"></i>Search booking</a></li>
						
					</ul>
				</li>
				<!--<li><a href="#"><i class="fa fa-circle"></i> <span>Attendence</span></a></li>-->
				<li class="treeview">
					<a href="#"><i class="fa fa-cogs text-aqua"></i> <span>Workers details</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul class="treeview-menu">
						<li><a href="plum.php"><i class ="fa fa-circle-o text-yellow"></i>Plumbing Workers</a></li>
						<li><a href="ele.php"><i class ="fa fa-circle-o text-yellow"></i>Eletrical Works</a></li>
						<li><a href="call.php"><i class ="fa fa-circle-o text-yellow"></i>Call taxi Workers</a></li>
						<li><a href="car.php"><i class ="fa fa-circle-o text-yellow"></i>Carpenters</a></li>
						<li><a href="in_design.php"><i class ="fa fa-circle-o text-yellow"></i>Interior designers</a></li>
						<li><a href="housekeep.php"><i class ="fa fa-circle-o text-yellow"></i>Housekeeping workers</a></li>
						<li><a href="mom.php"><i class ="fa fa-circle-o text-yellow"></i>Mother_care Workers</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#"><i class="fa fa-book text-aqua"></i> <span>Attendance</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul class="treeview-menu">
						<li><a href="att1.php"><i class ="fa fa-circle-o text-yellow"></i>Attendance Entry</a></li>
						<li><a href="attend.php"><i class ="fa fa-circle-o text-yellow"></i>Attendance Status</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="call.php"><i class="fa fa-phone text-aqua"></i> <span>Call Booking</span><i></i></a>
					<li><a href="logout.php"><i class="fa fa-user text-aqua"></i> <span>Logout</span></a></li>
				</li>
			</ul>
			<!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
		</aside>
	</body>
</html>