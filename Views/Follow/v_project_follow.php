<style>
.buttonFalse{
	border: 1px solid rgb(50,50,50);
    background:red !important;
}
</style>
<script type='text/javascript'>
 (function($) {
    $(document).ready(function(e) {
		$("#da-ex-dialog-div").dialog({
			autoOpen: false, 
			title: "ข้อมูลโครงงาน", 
			modal: true, 
			width: "80%",
			height: "auto",
			buttons: [{
					text: "ปิด", 
					//class:"buttonFalse",
					click: function() {
						$( this ).dialog( "close" );
					}}]
			//buttons: [{
			//		text: "บันทึก", 
			//		click: function() {
			//			$( this ).find('form#da-ex-dialog-form-val').submit();
			//		}}]
		});
        });
 
})(jQuery);


</script>			

 				<?php echo $nav;
				echo $sidebar?>
									
				<div class="grid_3">
                    <div class="da-panel-widget pdm-content">						
									<h1>ติดตามความก้าวหน้าจากอาจารย์ที่ปรึกษาโครงงาน</h1>   
                                    <hr>   
							<table id="da-tatable" class="da-table">
								<thead>
									<tr>
										<th width="10%"><center><b>ลำดับ</b></center></th>
                                        <th width="20%"><center><b>ชื่อโครงงาน</b></center></th>
										<th width="25%"><center><b>อาจารย์ที่ปรึกษา</b></center></th>
										<th width="15%"><center><b>วันที่ยื่นโครงงาน</b></center></th>
										<th width="10%"><center><b>สถานะโครงงาน</b></center></th>
										<th width="10%"><center><b>รายละเอียด</b></center></th>
                                    </tr>
								</thead>
								<tbody>
								<?php $i=1;foreach($form_prjAll as $follow):
								//if(($follow->proj_id == 10) || ($follow->proj_id == 0)){
								?>
									<tr>
										<td style="text-align:center;"><?php echo $i;?></td>
										<td style="text-align:center;"><?php echo $follow->frm1_nameth;?></td>
										<td style="text-align:center;"><?php echo $follow->pers_fname." ".$follow->pers_lname;?></td>
										<td style="text-align:center;"><?php echo $follow->frm1_subdate;?></td>
										<?php if($follow->proj_id == 2 || $follow->proj_id == 20){?>
										<td style="text-align:center;color:red;"><?php echo $follow->proj_nameth;?></td>
										<?php }else{?>
										<td style="text-align:center;"><?php echo $follow->proj_nameth;?></td>
										<?php } ?>
										<td class="da-icon-column">
										<center>
                                                	<a id="da-ex-dialog" href="#">
														<img title="ดูรายละเอียด" src="<?php echo base_url();?>/images/icons/color/magnifier.png" alt="" />
													</a>
										</center>			
													<!-- Dialog picture Sert-->
											<div id="da-ex-dialog-div" style="display:none;">
												<table class="da-table">
												<tr id="head">
													<td class="da-icon-column" style="width:20%">
														รหัสแบบฟอร์มโครงงาน
													</td>
													<td class="da-icon-column" style="text-align:left;">
														<?php echo $follow->frm1_id?>
													</td>
												</tr>
												<tr id="head">
													<td class="da-icon-column" >
														ชื่อโครงงาน (ภาษาไทย)
													</td>
													<td class="da-icon-column" style="text-align:left;">
														<?php echo $follow->frm1_nameth?>
													</td>
												</tr>
												<tr id="head">
													<td class="da-icon-column" >
														ชื่อโครงงาน (ภาษาอังกฤษ)
													</td>
													<td class="da-icon-column" style="text-align:left;">
														<?php echo $follow->frm1_nameen?>
													</td>
												</tr>
												<tr id="head">
													<td class="da-icon-column" >
														อาจารย์ที่ปรึกษา
													</td>
													<td class="da-icon-column" style="text-align:left;">
														<?php echo $follow->pers_fname." ".$follow->pers_lname;?>
													</td>
												</tr>
												<tr id="head">
													<td class="da-icon-column" >
														ความเป็นมาและความสำคัญ
													</td>
													<td class="da-icon-column" style="text-align:left;">
													<p id="importance" value="<?php echo $follow->frm1_importance?>"><?php echo $follow->frm1_importance?>
													</p>
													</td>
												</tr>
												<tr id="head">
													<td class="da-icon-column" >
														วัตถุประสงค์
													</td>
													<td class="da-icon-column" style="text-align:left;">
													<p id="phopos" value="<?php echo $follow->frm1_propose?>"><?php echo $follow->frm1_propose?>
													</p>
													</td>
												</tr>
												<tr >
													<td class="da-icon-column" >
														หลักการ ทฤษฎี เหตุผล
													</td>
													<td class="da-icon-column" style="text-align:left;">
													<p id="try" value="<?php echo $follow->frm1_theory?>"><?php echo $follow->frm1_theory?>
													</p>
													</td>
												</tr>
												<tr id="head">
													<td class="da-icon-column" >
														แผนการดำเนินงาน
													</td>
													<td class="da-icon-column" style="text-align:left;">
													<p id="plan" value="<?php echo $follow->frm1_plantask?>" ><?php echo $follow->frm1_plantask?>
													</p>
													</td>
												</tr>
												<tr id="head">
													<td class="da-icon-column" >
														ระยะเวลาเริ่มดำเนินงาน
													</td>
													<td class="da-icon-column" style="text-align:left;">
													<p id="time" value="<?php echo $follow->frm1_time?>"><?php echo $follow->frm1_time?>
													</p>
													</td>
												</tr>
												<tr id="head">
													<td class="da-icon-column" >
														ขอบเขตงาน
													</td>
													<td class="da-icon-column" style="text-align:left;">
													<p id="scope" value="<?php echo $follow->frm1_planscope?>"><?php echo $follow->frm1_planscope?>
													</p>
													</td>
												</tr>
												<tr id="head">
													<td class="da-icon-column" >
														ประโยชน์ที่คาดว่าจะได้รับ
													</td>
													<td class="da-icon-column" style="text-align:left;">
													<p id="ben" value="<?php echo $follow->frm1_benefit?>"><?php echo $follow->frm1_benefit?>
													</p>
													</td>
												</tr>
												</table>
											</div>
										</td>
									</tr>
								<?php  $i++; 
								// } 
								endforeach; ?>
								</tbody>
							</table>
                    </div>
                </div>