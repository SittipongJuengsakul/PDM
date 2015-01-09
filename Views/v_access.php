    <script type='text/javascript'>
	function edit_person(stu_id, proj_id,form_subdate,form_assigndate) {
        document.getElementById('edit_Fname').value = proj_id;
        document.getElementById('edit_lname').value = form_subdate;
        document.getElementById('edit_per_id').value = stu_id;
		document.getElementById('edit_pre_id').value = form_assigndate;
		$( "#dialog" ).dialog({width : 700});
	};
	</script>
						<div class="grid_4_center">
                        	<div class="da-panel collapsible">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                    </span>
                                </div>
                                <div class="da-panel-content">
                                    <table id="da-ex-datatable-default" class="da-table">
                                        <thead>
                                            <tr>
                                                <!--<th>NO.</th>
												<th>Form ID</th>-->
                                                <th>รหัสนิสิต</th>
                                                <th>สถานะโครงงาน</th>
                                                <th>วันที่ส่งแบบฟอร์ม</th>
												<th>วันที่แต่งตั้งกรรมการสอบปากเปล่า</th>
												<th>เมนู</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                             <?php
								if(count($rs)==0)
								{
									echo"<tr><td colspan='10' align='center'>--nodata--</td></tr>";
								}
								else
								{
								$no=1;
								foreach($rs as $r)
								{
									echo"<tr>";
									//echo"<td align='center'>$no</td>";
									//echo"<td>".$r['user_id']."</td>";
									//echo"<td>".$r['form_id']."</td>";
									echo"<td>".$r['std_id']."</td>";
									//echo"<td>".$r['proj_id']."</td>";
									$sta = $r['proj_id'];
									if ($sta==0){
										echo "<td>รอผล</td>";
									}else if ($sta==10){
										echo "<td>ผ่าน</td>";
									}else if ($sta==20){
										echo "<td>ไมผ่าน</td>";
									}			?>
									<td><?php echo $r['form_subdate'];?></td>
									<td> <?php echo $r['form_assigndate'];?></td>
									<!--<td><a href="PDM/?stu_id=' $r['std_id'] ';?>">Change</a></td>-->
									<td class = "da-icon-column">
										<a  href= 'javascript:void(0)' onClick = "edit_person()">
										<img src = '<?php echo base_url(); ?>images/icons/color/pencil.png' class = 'da-tooltip-ne' title = 'ตรวจสอบ'/></a>
									</td>
									<?php
									echo"</td>";
									echo"</tr>";
									$no++;
								}
								}
								?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
<div id = 'dialog' title='อนุมัติ' style='display:none'>
	<div class = 'da-panel-content'>
		<form class = 'da-form' id = 'editform' action = '<?php echo site_url();?>PDM/c_' method = 'post'>
			<div id="editform-error" class="da-message error" style="display:none;"></div>
			<div class = 'da-form-inline'>
				<div class = 'da-form-row'>
					<label style="width:150px">สถานะโครงงาน<span class = "required"> *</span></label>
					<div class = "da-form-item small">
						<select name= 'edit_pre_id' id='edit_pre_id'>
							<option value="0" selected>Wait</option>
							<option value="10" selected>Access</option>
							<option value="20" selected>Approve</option>
						</select>
					</div>
					<br />
					<label style="width:150px">รหัสนิสิต<span class = "required"> *</span></label>
					<div class = "da-form-item small">
						<input type="text" name='edit_Fname' id='edit_Fname' value='<?php echo $r['std_id']; ?>' placeholder = 'รหัสนิสิต' />
					</div>
					<br />
					<label style="width:150px">วันที่ส่งแบบฟอร์ม<span class = "required"> *</span></label>
					<div class = "da-form-item small">
						<input type="text" name='edit_lname' id='edit_lname' placeholder = 'วันที่ส่งแบบฟอร์ม' />
						<input type = "hidden" id = "edit_per_id" name = "edit_per_id" value='' >
					</div>
					</br>
					<label style="width:150px">วันที่แต่งตั้งกรรมการสอบปากเปล่า<span class = "required"> *</span></label>
					<div class = "da-form-item small">
						<input type="text" name='edit_lname' id='edit_lname' placeholder = 'วันที่แต่งตั้งกรรมการสอบปากเปล่า' />
						<input type = "hidden" id = "edit_per_id" name = "edit_per_id" value='' >
					</div>
				</div>
			</div>
			<div class='da-button-row'>
				<input type='submit' value='บันทึก' class = 'da-button green large da-tooltip-ne' title = 'คลิกเพื่อบันทึก' />
			</div>
		</form>
	</div>
</div>
