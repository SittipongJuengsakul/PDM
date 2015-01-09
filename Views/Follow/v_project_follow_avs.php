<script type='text/javascript'>
function dialog(pgsid,idform,nameth,nameen,stdfname,stdlname,stdid,report,fixproblem){
	$pgs = document.value = pgsid;
	$id = document.value = idform;
	$name = document.value = nameth;
	document.getElementById('idform').innerHTML = idform;
	document.getElementById('nameth').innerHTML = nameth;
	document.getElementById('nameen').innerHTML = nameen;
//	document.getElementById('student').innerHTML = stdid+" "+stdfname+" "+stdlname;
	document.getElementById('report').innerHTML = report;
	document.getElementById('fixproblem').innerHTML = fixproblem;
	//document.getElementById('file').innerHTML = file;
	//alert($id);
	$(function()
	{
		$("#dialog").dialog({
			//autoOpen: false,
			title: "ข้อมูลการรายงาน",
			modal: true,
			width: "700",
			height: "auto",
			buttons: [{
					text: "ตอบกลับ",
					class:"cancelButton",
					click: function() {
						$( this ).function(showpsg($pgs,$id,$name));
					}}]
		})
    });
}
function showpsg($pgs,$id,$name){
	//alert($id);
	$(function(){
		$("#dialog").dialog( "close" )
	});
	$id02 = document.value = $id;
	$pgs2 = document.value = $pgs;
	document.getElementById('formdialog').innerHTML = $name;
	//alert($id02);
	$(function()
	{
		$("#dialog02").dialog({
			//autoOpen: false,
			title: "ข้อมูลการรายงาน",
			modal: true,
			width: "600",
			height: "520",
			buttons: [{
					text: "ตกลง",
					class:"cancelButton",
					click: function() {
						//$(this).dialog( "close" );
						//$( this ).find('form#dialog02-val').submit();
						$( this ).function(sendId($id02,$pgs2));
					}}]
		})
    });
}
function sendId($id02,$pgs2){
	$(function(){
		$("#dialog02").dialog( "close" )
	});
	$idsent = document.value = $id02;
	$pgs = document.value = $pgs2;
	window.location.href = "https://10.16.64.86/sesite/index.php/PDM/follow_project_avs/getId?pgs="+$pgs;
}
</script>
<style>
.td-margin{
	margin-left: 10px;
}

.textarea_a {
width:300px;
scrollbar-arrow-color:#000; /*สีลูกศรสกอลบาร์*/
scrollbar-face-color:#fff; /*สีของตัวเลื่อน*/
scrollbar-highlight-color:#fff; /*สีแถบสว่าง*/
scrollbar-3dlight-color:#fff; /*สีแถบสว่างจ้าริมสุด*/
scrollbar-track-color:#fff; /*สีพื้นหลังสกอลบาร์*/
scrollbar-shadow-color:#fff; /*สีเงาสกอลบาร์*/
scrollbar-darkshadow-color:#fff; /*สีเงามืดส่วนริมสุด*/
color:#000; /*สีตัวหนังสือ*/
border:1px solid #000; /*สีเส้นขอบ*/
font-size:12px /*ขนาด font*/
}

</style>
 				<?php echo $nav;
				echo $sidebar?>
				<div class="grid_3">
                    <div class="da-panel-widget pdm-content">
									<h1>ติดตามความก้าวหน้าจากนิสิต</h1>
                                    <hr>
							<table id="da-ex-datatable-numberpaging" class="da-table">
								<thead>
									<tr>
										<th width="2%"><center>ลำดับ</center></th>
                                        <th width="20%"><center>ชื่อโครงงาน</center></th>
										<th width="20%"><center>ผู้จัดทำโครงงาน</center></th>
										<th width="10%"><center>วันที่ยื่นโครงงาน</center></th>
										<th width="5%"><center>รายละเอียดการรายงาน</center></th>
                                    </tr>
								</thead>
								<tbody>
								<?php $j=0;
								$i=1;
								foreach($progress_prjAll as $fll):
								?>
									<tr>
										<td><?php echo $i;?></td>
										<td><?php echo $fll->frm1_nameth;?></td>
										<td><?php echo $fll->std_fname;?>
											<?php echo $fll->std_lname;?>
										</td>
										<td><?php echo $fll->frm1_subdate;?></td>
										<td>
											<center>
											<a OnClick ="dialog(
											'<?php echo $fll->pgs_id;?>',
											'<?php echo $fll->frm1_id;?>',
											'<?php echo $fll->frm1_nameth;?>',
											'<?php echo $fll->frm1_nameen;?>',
											'<?php echo $fll->std_fname;?>',
											'<?php echo $fll->std_lname;?>',
											'<?php echo $fll->std_id;?>',
											'<?php echo $fll->pgs_report;?>',
											'<?php echo $fll->pgs_fixproblem;?>')"
											href="javascript:void(0)">
											<img title="ดูรายละเอียด" src="<?php echo base_url();?>/images/icons/color/magnifier.png" alt=""/>
											</a>
											</center>
										</td>
									</tr>
								<?php
								$i++;
								$j++;
								endforeach; ?>
								</tbody>
							</table>
                    </div>
                </div>
				<!-- Dialog picture Sert-->
									<div id="dialog" style="display:none;">
										<form class="da-form">
										<fieldset class="da-form-inline">
                                            <legend style="padding-top:10px;">1. ความก้าวหน้าของโครงงาน</legend>
                                            <table style="margin: 20px 0cm 20px 1cm;">
												<tr>
													<td style="width:60%"><b>รหัสแบบฟอร์มโครงงาน</b></td>
													<td style="width:5%;"><b></b></td>
													<td style="width:5%;"><b>:</b></td>
													<td style="width:30%" id="idform"></td>
												</tr>
												<tr>
													<td><b>ชื่อโครงงาน (T)</b></td>
													<td></td>
													<td><b>:</b></td>
													<td id="nameth"></td>
												</tr>
												<tr>
													<td><b>ชื่อโครงงาน (E)</b></td>
													<td></td>
													<td><b>:</b></td>
													<td id="nameen"></td>
												</tr>
												<tr >
													<td>1.1 กิจกรรมที่ศึกษา</td>
													<td></td>
													<td><b>:</b></td>
													<td id="report"></td>
												</tr>
												<tr>
													<td><dd>1.2 ปัญหาที่พบจากการดำเนินงาน</td>
													<td></td>
													<td><b>:</b></td>
													<td id=""></td>
												</tr>
												<tr>
													<td><dd>1.3 แนวทางการแก้ปัญหา</td>
													<td></td>
													<td><b>:</b></td>
													<td id="fixproblem" ></td>
												</tr>
											</table>
                                        </fieldset>
										<fieldset class="da-form-inline">
										<legend style="padding-top:10px;">2. สิ่งที่แนบมากับรายงานความก้าวหน้าฉบับนี้</legend>
											<table style="margin: 20px 0cm 20px 1cm;">
												<tr>
													<td style="width:60%"><b>เอกสารที่ที่แนบ</b></td>
													<td style="width:5%;"><b></b></td>
													<td style="width:5%;"><b>:</b></td>
													<td style="width:30%" id=""></td>
												</tr>
												<tr>
													<td ><b>เอกสารพื้นฐานของโครงงาน</b></td>
													<td></td>
													<td ><b>:</b></td>
													<td id=""></td>
												</tr>
												<tr>
													<td ><b>รายละเอียดเพิ่มเติม</b></td>
													<td></td>
													<td ><b>:</b></td>
													<td id=""></td>
												</tr>
											</table>
										</fieldset>
										</form>
									</div>


								<!--== Dialogue sent id from Teacher-->
											<div id="dialog02" style="display:none;">
											<form id="dialog02-val" class="da-form">
											<fieldset class="da-form-inline">
                                            <legend style="padding-top:10px;">รายละเอียดโครงงาน</legend>
												<table style="margin: 20px 0cm 20px 1cm;">
												<tr id="head">
													<td style="width:60%">รหัสแบบฟอร์ม</td>
													<td style="width:5%;"><b></b></td>
													<td style="width:5%;"><b>:</b></td>
													<td style="width:30%" id="formdialog" name="formdialog" value=""></p></td>
												</tr>
												<tr class="da-icon-column">
													<td class="da-icon-column"><label>ข้อมูลการรายงาน</label></td>
													<td style="width:5%;"><b></b></td>
													<td style="width:5%;"><b>:</b></td>
													<td class="da-icon-column" style="width:30%">
														<select class="chzn-select" style="width:300px;">
														<option>ครบถ้วน</option>
														<option>ครบถ้วนแต่ยังต้องปรับปรุง</option>
														<option>ไม่ครบถ้วนแต่ยังต้องปรับปรุง</option>
														</select>
													</td>
												</tr>
												</table>
											</fieldset>
											<fieldset class="da-form-inline">
											<legend style="padding-top:10px;">ข้อมูลการตอบกลับ</legend>
											<table style="margin: 20px 0cm 20px 1cm;">
											<tr>
												<td style="width:40%;"></td>
												<td style="width:50%;"><div class="da-form-item large"><textarea name="textInput"></textarea></div></td>
											<tr>
											</fieldset>
											</form>
											</div>