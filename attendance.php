<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dwa",$con);
if(isset($_GET['att']))
{
?>
<html>
    <body>
       <center>
           <table border="1">
				<tr>
					<td bgcolor="66CCFF"><Emp_id</td>
					<td>Name</td>
					<td>Per_hr_pay</td>
					<td>Mobno</td>

				</tr>
				<tr>
					<?php
						$query=mysql_query("select emp_id,name,per_hour_pay,mob_no from plumbing_workers where emp_id='".$_GET['att']."'");

						while($row=mysql_fetch_assoc($query))
						{
						?>

						<td><?php echo $row['emp_id']; ?></td>`
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['per_hour_pay']; ?></td>
						<td><?php echo $row['mob_no']; ?></td>
					<?php } ?>
				</tr>
			</table>
		</center>
	</body>
</html>
<?php
}
?>