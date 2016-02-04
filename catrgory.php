<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("dwa",$con);
	if(isset($_GET['sub']))
	{
		?>
		<!--<tr><td><label><h4><font size="3" face="arial" color="red">*</font>Sub category</h4></label></td>-->
		<td>
		<select name="sub_category" id="sub_cat">
			<div id="detail">
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
			</div>
		</select><!--</td>
		</tr>-->
		<?php
	} 
	?>


