<?php 
	
?>

<!-- content area -->
<div id = "da-content-area">

	<div class = "grid_3_center">
		<div class ="da-panel-widget pdm-content">
			<div class ="da-panel-header">
				<span class ="da-panel-title">
					<h1><img src ="<?php echo base_url() ; ?>/images/icons/color/calendar_2.png" alt="" />
					กำหนดวันสอบปากเปล่า </h1>
				</span>
			</div>
			<hr/>
			<div class = "da-panel-content">
			<form  class = "da-form" action = "<?php echo base_url();?>index.php/PDM/oral_exam/insert_data" method="post">
				<table class ="da-table">
				<!--<?php foreach($result as $row) { ?>--> 
					<tbody>
						<tr>	
							<td> ชื่อโครงงาน (ภาษาไทย) </td>
							<td> <?php echo $row['frm1_nameth'];?>	</td>
						</tr>
						<tr>	
							<td> ชื่อโครงงาน (ภาษาอังกฤษ)</td>
							<td> <?php echo $row['frm1_nameen'];?>	</td>
						</tr>
						<tr>
							<td>ชื่อผู้จัดทำ</td>
							<td><?php echo $row['std_fname'];?> <?php echo $row['std_lname'] ?>	</td>
						</tr>
						<tr>
							<td> ชื่ออาจารย์ที่ปรึกษาโครงงาน </td>
							<td><?php echo $row['pers_fname'];?>  <?php echo $row['pers_lname'];?></td>
						</tr>
						
						<tr>
							<td>วัน - เวลา </td>
							<td><input id="da-ex-datepicker" type="text" name = "time" /></td>
				
						</tr>
						<tr>
							<td>สถานที่สอบ </td>
							<td><input type="text" class="required" name = "location"/></td>
						</tr>
						
						<tr>
							<td>ห้องสอบ </td>
							<td><input type="text" class="required" name="room"/></td>
				
						</tr>
						<!--<?php } ?>-->
						</tbody>
					</table>
					<br/>
					
					<div >
                      	<input type="reset" value="Reset" class="da-button gray left" />
                      	<input type="submit" value="Submit" class="da-button green" style = "float:right"/>
                    </div>

				</form>
			</div>
		</div>
	</div>
</div>